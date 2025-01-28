<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServicesController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/redirect', function () {
    return view('redirect');
});

Route::get('/sendform', [MessageController::class, 'showForm']);

Route::post('/sendform', [MessageController::class, 'storeMessage']);

Route::get('/messages', [MessageController::class, 'showMessages']);

Route::get('/login', [LoginController::class, 'showLogin']);

Route::post('/login', [LoginController::class, 'loginRedirect']);

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/resource-page', function () {
    return view('resource-page');
});

Route::get('/services', function () {
    return view('services', []);
});

Route::get('/services/log-enrichment-and-threat-detection', [ServicesController::class, 'showLogEnrichment']);

Route::get('/services/enhanced-reporting', [ServicesController::class, 'showEnhancedReporting']);

Route::get('/services/threat-hunting-and-training', [ServicesController::class, 'showThreatHunting']);
