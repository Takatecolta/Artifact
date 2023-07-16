<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TicketRequest; 



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
