@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Order Tickets for: {{$event->name}}</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="ticketPrice" class="col-sm-2 col-form-label">Price ($): </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="ticketPrice" readonly placeholder="{{$event->price}}">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="eventName" class="col-sm-2 col-form-label">Event Info:</label>
            <div class="col-sm-10">
                <p>
                    Event Name: <span>{{$event->name}}</span> <br>
                    Event Tickets Left: <span>{{$event->available_tickets}}</span> <br>
                    Event Start-Date: <span>{{$event->event_start}}</span> <br>
                    Event End-Date: <span>{{$event->event_end}}</span> <br>
                    Event Location: <span>{{$event->location}}</span>
                </p>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                @if($event->available_tickets > 0)
                <form action="{{ route('order-tickets', $event->id) }}" method="POST">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure you want order tickets for this event?')">Confirm Order</button>
                </form>
                @else
                <a href="{{ route('events') }}">Sorry, tickets to this event are sold out.</a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection