<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/nav', function () {
    return Inertia::render('Nav');
});

Route::get('/users', function () {
    // sleep(2);
    $time = Carbon::now()->format('h:i A'); // Format the time as 12-hour with AM/PM

    return Inertia::render('Users', [
        'time' => $time,
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd(request('foo'));
});

