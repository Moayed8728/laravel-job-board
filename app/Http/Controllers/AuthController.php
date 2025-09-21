<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup', ['pageTitle' => 'Sign Up']);
    }

    public function signup(SignupRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        
        $user->save();

        auth()->login($user);
        
        return redirect('/');

    }

    public function showLoginForm()
    {
        return view('auth.login', ['pageTitle' => 'Login']);
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();

      
    }
    
    public function logout( )  {
        // Handle logout logic here
        auth()->logout();
        return redirect('/');

    }
    
}
