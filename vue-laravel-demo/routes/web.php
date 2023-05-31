<?php

use \App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// login endPoint
Route::get('/login',[LoginController::class, 'create'])->name('login');

// auth endPoint
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    });

    Route::get('/nav', function () {
        return Inertia::render('Nav');
    });

    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]),
            'filters' => Request::only(['search'])
        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    });

    Route::post('/users', function () {
        //trottle submit
        // sleep(3);

        //validate the request
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        //create the user
        User::create($attributes);

        //redirect
        return redirect('/users');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });

    Route::post('/logout', function () {
        dd(request('foo'));
    });
});
