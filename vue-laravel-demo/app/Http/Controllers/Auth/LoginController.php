<?php
// controller nameSpace
namespace App\Http\Controllers\Auth;

// controller extend
use App\Http\Controllers\Controller;

// builtIn libraries
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// ext libraries
use Inertia\Inertia;

class LoginController extends Controller
{
    public function create()
    {
       return Inertia::render('Auth/Login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'credentials doesn\'t match our records.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
