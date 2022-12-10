<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

// ->middleware('auth')

Route::get('/', [PagesController::class, 'viewHome'])->name('home');

Route::post('/save-ticket', [TicketsController::class, 'saveTicket'])->name('saveTicket');

Route::post('/add-event', [EventController::class, 'addEvent'])->name('create-event');

Route::get('/add-event', [PagesController::class, 'viewAddEvent'])->name('add-event')->middleware('auth');

Route::get('/events', [PagesController::class, 'viewEvents'])->name('events');

Route::post('/event/deleted/{eventId}', [EventController::class, 'deleteEvent'])->name('deleteEvent')->middleware('admin');

Route::get('/edit-event/{eventId}', [PagesController::class, 'viewEditPage'])->name('viewEditPage')->middleware('admin');

Route::post('/event-edited/{eventId}', [EventController::class, 'editEvent'])->name('editEvent')->middleware('admin');

require __DIR__.'/auth.php';
