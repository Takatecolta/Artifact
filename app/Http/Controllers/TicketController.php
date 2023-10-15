<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TicketRequest; 
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    public function index(Ticket $ticket)
    {
        return view('tickets/index')->with(['tickets' => $ticket->getPaginateByLimit()]);
    }
    
    public function show(Ticket $ticket)
    {
        return view('tickets/show')->with(['tickets' => $ticket]);
    }
    
    public function create()
    {
        return view('tickets/create');
    }
    public function store(Request $request, Ticket $ticket)
    {
    $input = $request['ticket'];
    $input['user_id'] = Auth::id();
    $ticket->fill($input)->save();
    return redirect('/tickets/' . $ticket->id);
    }
    
    public function edit(Ticket $ticket)
    {
        return view('tickets/edit')->with(['tickets' => $ticket]);
    }
    
    public function getTickets(Request $request)
    {   
        $all_tickets = Ticket::all();
        
        // return [
        //     [
        //         'title' => $first_ticket->title,
        //         'start' => $first_ticket->current_date,
        //         'end'   => $first_ticket->deadline_date,
        //     ],
        // ];
        // return array_map('toCalEventJson', $all_tickets)
        
        return $all_tickets->map(function ($tk) {
            return [
                'title' => $tk->title,
                'start' => $tk->current_date,
                'end'   => $tk->deadline_date,
                'url'   => 'https://732b0e60314a477daa61e14dc24380a3.vfs.cloud9.us-east-1.amazonaws.com/tickets/'.$tk->id,
            ];
        });
    }
    
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $input_ticket = $request['ticket'];
        $input_ticket['user_id'] = Auth::id();
        $ticket->fill($input_ticket)->save();

        return redirect('/tickets/' . $ticket->id);
    }
    
    public function delete(Ticket $ticket)
    {
        $ticket->delete();
        return redirect('/tickets/index');
    }
}
