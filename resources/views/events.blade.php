@extends('layouts.main')

@section('content')

<h1>List of all current and future Events</h1>

<div class="add-event-button">
    @if(Auth::user() && Auth::user()->isAdmin == 1)
    <a class="btn btn-primary" href=" {{ route('add-event') }} ">Create Event</a>
    @endif
</div>


<div class="events">
    @foreach($events as $event)
    <div class="card" style="width: 18rem;">
        <img src="{{ $event->photo }}" class="card-img-top" alt="photo">
        <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            <p class="card-text">{{ $event->description }}</p>
        </div>
        @if(Auth::user())
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Location: {{ $event->location }}</li>
            <li class="list-group-item">Price: ${{ $event->price }}</li>
            <li class="list-group-item">Amount of Tickets left: {{ $event->available_tickets }}</li>
            @if(Auth::user() && Auth::user()->isAdmin == 1)

            <li class="list-group-item">
                <div class="event-edit-buttons">
                    
                    <a href="{{ route('viewEditPage', $event->id)}}" class="btn btn-primary">Edit Event</a>

                    <form action="{{ route('deleteEvent', $event->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this event?')">Delete Event</button>
                    </form>

                </div>
            </li>

            @endif
        </ul>
        @endif
    </div>
    @endforeach
</div>

@endsection