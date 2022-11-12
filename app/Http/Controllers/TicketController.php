<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ticketForm(Request $request){
        $ticket = new Ticket();
        $ticket->name = $request->input('name');
        $ticket->email = $request->input('email');
        $ticket->phone = $request->input('phone');
        $ticket->reason = $request->input('reason');

        $ticket->save();

        return redirect('/contact');
    }
}
