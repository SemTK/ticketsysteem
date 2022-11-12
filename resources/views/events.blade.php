@extends('layouts.main')

@section('content')

<h1>List of all current and future Events</h1>

<div class="events">
    @foreach($events as $event)
    <div class="card" style="width: 18rem;">
        <img src="{{ $event->photo }}" class="card-img-top" alt="photo">
        <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            <p class="card-text">{{ $event->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Location: {{ $event->location }}</li>
            <li class="list-group-item">Price: ${{ $event->price }}</li>
            <li class="list-group-item">Amount of Tickets left: {{ $event->available_tickets }}</li>
        </ul>
    </div>
    @endforeach
</div>

@endsection