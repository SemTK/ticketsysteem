@extends('layouts.main')

@section('content')

<h1 class="home-title">Contact Page</h1>
<h6>Maak een Ticket:</h6>

<form action="{{ route('ticketForm') }}" method="POST">
    @csrf
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name: </label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email: </label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label">Phone Number: </label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" name="phone">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="reason" class="col-sm-2 col-form-label">Reason: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="reason">
        </div>
    </div>
    <div class="mb-3 row">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection