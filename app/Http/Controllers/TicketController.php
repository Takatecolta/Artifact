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
    //チケットを全取得して、カレンダーに表示させる
    public function getTickets(Request $request)
    {   
        $all_tickets = Ticket::all();
        
        
        return $all_tickets->map(function ($tk) {
            return [
                'title' => $tk->title,
                'start' => $tk->current_date,
                'end'   => $tk->deadline_date,
                'url'   => 'https://732b0e60314a477daa61e14dc24380a3.vfs.cloud9.us-east-1.amazonaws.com/tickets/'.$tk->id,
                'color' => $this->TicketColor($tk->progress),
            ];
        });
    }
    //チケットの色を変更したい
    public function TicketColor($progress){
        $all_tickets = Ticket::all();
        $color = '';
        if($progress===1){
            $color='#ff4500';
            return $color;
        }elseif($progress===2){
            $color='#2e8b57';
            return $color;
        }else{
            $color='#ffd700';
            return $color;
        }
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
        info('delete', ['foo' => 'bar']);
        $ticket->delete();
        return redirect('/tickets/index');
    }
    
    
    
    public function updateTicketProgress(Request $request, $ticketId)
    {
        info('call updateTicketProgress');
    //   info('updateTicketProgress', print_r($request, true));
    //   $ticketId = $request->input('ticketId');
        $newProgress = $request->input('newProgress');
        info($newProgress);

      
    // //   info('find', (Ticket::find($ticketId));
    //   // チケットの進捗状態を更新
        $ticket = Ticket::find($ticketId);
        $ticket->progress = $newProgress;
        $ticket->save();

        return response()->json(['message' => '進捗状態が更新されました']);
    }
}
