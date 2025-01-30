<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServicesController;
use App\Models\Message;
use App\Models\Service;
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
    return view('index', ['services' => Service::all()]);
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
    $services = Service::all();
    return view('services', ['services' => Service::all()]);
});

Route::get('/services/log-enrichment-and-threat-detection', [ServicesController::class, 'showLogEnrichment']);

Route::get('/services/enhanced-reporting', [ServicesController::class, 'showEnhancedReporting']);

Route::get('/services/threat-hunting-and-training', [ServicesController::class, 'showThreatHunting']);

Route::get('/crud', [CrudController::class, 'showForm']);
Route::post('crud/create', [CrudController::class, 'createService']);
Route::post('crud/update', [CrudController::class, 'updateService']);
Route::post('crud/delete', [CrudController::class, 'deleteService']);
