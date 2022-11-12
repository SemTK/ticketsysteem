<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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

        return redirect('/add-event');
    }
}
