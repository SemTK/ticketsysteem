<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function addEvent(Request $request){
        $event = new Event();
        $event->name = $request->input('eventName');
        $event->photo = $request->input('photo');
        $event->event_start = $request->input('event_start');
        $event->event_end = $request->input('event_end');
        $event->available_tickets = $request->input('amountOfTickets');
        $event->location = $request->input('location');
        $event->price = $request->input('price');
        $event->description = $request->input('desc');
        $event->save();
        
        $ticket_amount = $request->input('amountOfTickets');
        
        for($i = 0; $i < $ticket_amount; $i++){
            $ticket = new Ticket();
            $ticket->event_id = $event->id;
            $ticket->save();
        }
        
        return redirect('events');
    }
    
    public function deleteEvent($eventId){
        $event = Event::findOrFail($eventId);
        $event->delete();
        
        
        
        return redirect('events');
    }
    
    public function editEvent(Request $request, $eventId){
        $event = Event::findOrFail($eventId);
        
        $event->name = $request->input('eventName');
        $event->photo = $request->input('photo');
        $event->event_start = $request->input('event_start');
        $event->event_end = $request->input('event_end');
        $event->available_tickets = $request->input('amountOfTickets');
        $event->location = $request->input('location');
        $event->price = $request->input('price');
        $event->description = $request->input('desc');
        
        $event->save();
        
        return redirect('events');
    }
    
    public function orderTicket($eventId){
        $event = Event::findOrFail($eventId);
        
        if($event->available_tickets > 0){
            $ticket = new Ticket();
            $ticket->user_id = Auth::id();
            $ticket->event_id = $event->id;
            $ticket->save();
            
            $event->available_tickets -= 1;
            $event->save();
        }
        else{
            return redirect('events');
        }
        
        
        return redirect('events');
        
        // for($i = 0; $i < $ticket_amount; $i++){
        //     $ticket = new Ticket();
        //     $ticket->event_id = $event->id;
        //     $ticket->save();
        // }
            
        }
    }
    