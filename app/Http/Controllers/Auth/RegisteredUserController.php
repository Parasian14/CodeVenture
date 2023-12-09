<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'nama_depan' => ['required', 'string','max:255'],
            'nama_belakang' => ['required', 'string','max:255'],
            'telepon' => ['required', 'min:11','numeric', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class], 
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::NEW);
    }
}