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
        
        //  // カレンダー表示期間
        // $start_date = date('Y-m-d', $request->input('start_date') / 1000);
        // $end_date = date('Y-m-d', $request->input('end_date') / 1000);
        
        // 登録処理
        // return Ticket::query()
        //     ->select(
        //         // FullCalendarの形式に合わせる
        //         'current_date as start',
        //         'deadline_date as end',
        //         'title as title'
        //     )
        //      // FullCalendarの表示範囲のみ表示
        //     ->where('start_date', '>', $start_date)
        //     ->where('end_date', '<', $end_date)
        //     ->get();
        // $input = Ticket::all()[0];
        // return [['title'=>$input->title, 'start'=>$input->current_date, 'end'=>$input->deadline_date]];
        // return [
        //     [
        //         'title' => 'title',
        //         'description' => '人気の美容室予約取れた',
        //         'start' => '2023-07-09',
        //         'end'   => '2023-07-10',
        //     ],
        //     [
        //         'title' => 'シルバーウィーク旅行',
        //         'description' => '人気の旅館の予約が取れた',
        //         'start' => '2023-07-20 10:00:00',
        //         'end'   => '2023-07-22 18:00:00',
        //         'url'   => 'https://admin.juno-blog.site',
        //     ],
        // ];
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
