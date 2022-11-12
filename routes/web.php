<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

// ->middleware('auth')

Route::get('/', [PagesController::class, 'viewHome'])->name('home');

Route::get('/contact', [PagesController::class, 'viewContact'])->name('contact');

Route::get('/about-us', [PagesController::class, 'viewAboutUs'])->name('about-us');

Route::post('/save-ticket', [TicketsController::class, 'saveTicket'])->name('saveTicket');

Route::post('/add-event', [EventController::class, 'addEvent'])->name('addEvent');

Route::get('/add-event', [PagesController::class, 'viewAddEvent'])->name('add-event')->middleware('auth');

Route::get('/events', [PagesController::class, 'viewEvents'])->name('events');

Route::post('/contact', [TicketController::class, 'ticketForm'])->name('ticketForm');

require __DIR__.'/auth.php';
