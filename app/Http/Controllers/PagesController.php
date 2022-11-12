<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use PDO;

class PagesController extends Controller
{
    public function viewHome() {
        $tickets = Ticket::all();

        return view('home', [
            'tickets' => $tickets
        ]);
    }

    public function viewContact() {
        return view('contact');
    }

    public function viewAboutUs(){
        return view('about-us');
    }

    public function viewAddEvent(){
        return view('add-event');
    }
    
    public function viewEvents(){
        $allEvents = Event::all();

        return view('events', ['events' => $allEvents]);
    }
}
