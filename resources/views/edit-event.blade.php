@extends('layouts.main')

@section('content')

<h1>Edit Event</h1>
<form method="POST" action="{{ Route('editEvent', $event->id) }}">
    @csrf
    <div class="mb-3 row">
        <label for="eventName" class="col-sm-2 col-form-label">Event Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="eventName" value="{{ $event->name }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="photo" class="col-sm-2 col-form-label">Photo URL</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="photo" value="{{ $event->photo }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="eventStart" class="col-sm-2 col-form-label">Start-Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="event_start" value="{{ $event->event_start }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="eventEnd" class="col-sm-2 col-form-label">End-Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="event_end" value="{{ $event->event_end }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="amountOfTickets" class="col-sm-2 col-form-label">Amount of Tickets</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="amountOfTickets" value="{{ $event->available_tickets }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="location" class="col-sm-2 col-form-label">Location</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="location" value="{{ $event->location }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="price" step="0.50" value="{{ $event->price }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="desc" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="desc" rows="3">{{ $event->description }}</textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <button type="submit" class="btn btn-primary">Edit Event</button>
    </div>
</form>


@endsection

