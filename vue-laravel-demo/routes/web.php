<?php

// root controllers
use App\Http\Controllers\Auth\LoginController;

// root models
use \App\Models\User;

// built-in libraries
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// ext. frameworks & libraries
use Inertia\Inertia;

// logIn endPoint
Route::get('/login',[LoginController::class, 'create'])->name('login');
// logIn post endPoint
Route::post('/login',[LoginController::class, 'store']);
// logOut post endPoint
Route::post('/logout',[LoginController::class, 'destroy']);


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
            'filters' => Request::only(['search']),

            // Laravel properties to make a elevated authorization
            'can' => [
                'createUser' => Auth::user()->can('create', User::class)
            ]
        ]);
    });

    // endpoint for create route
    Route::get('/users/create', function () {
        return Inertia::render('Users/Create');
    })->middleware('can:create,App\Models\User');

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

});
