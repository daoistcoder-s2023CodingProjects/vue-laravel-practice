<?php

use Illuminate\Support\Facades\Route;
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
    return Inertia::render('Home', [
        'name' => 'Jerome Ballena',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/nav', function() {
    return Inertia::render('Nav');
});

Route::get('/users', function() {
    sleep(2);
    return Inertia::render('Users');
});

Route::get('/settings', function() {
    return Inertia::render('Settings');
});