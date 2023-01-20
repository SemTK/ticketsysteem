<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// ->middleware('auth')

// GET Routes
Route::get('/', [PagesController::class, 'viewHome'])->name('home');

Route::get('/my-tickets', [PagesController::class, 'viewMyTicketsPage'])->name('my-tickets')->middleware('auth');

Route::get('/edit-event/{eventId}', [PagesController::class, 'viewEditPage'])->name('viewEditPage')->middleware('admin');

Route::get('/add-event', [PagesController::class, 'viewAddEvent'])->name('add-event')->middleware('auth');

Route::get('/events', [PagesController::class, 'viewEvents'])->name('events');

Route::get('/order-tickets/{eventId}', [PagesController::class, 'viewOrderTicketPage'])->name('orderTicketsPage')->middleware('auth');

// POST Routes
Route::post('/event/deleted/{eventId}', [EventController::class, 'deleteEvent'])->name('deleteEvent')->middleware('admin');

Route::post('/event-edited/{eventId}', [EventController::class, 'editEvent'])->name('editEvent')->middleware('admin');

Route::post('/add-event', [EventController::class, 'addEvent'])->name('create-event')->middleware('admin');

Route::post('/order-tickets/{eventId}', [EventController::class, 'orderTicket'])->name('order-tickets')->middleware('auth');

require __DIR__.'/auth.php';
