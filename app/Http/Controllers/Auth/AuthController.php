<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    /**
     * Login form
     */
    public function login()
    {
        return view("auth.login");
    }


    /**
     * authenticate user
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    /**
     * Signup form
     */
    public function signup()
    {
        return view("auth.signup");
    }

    /**
     * Signup form
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required',
        ]);
        
     

        $user = new User();
        $user->uuid=getRandomCharactor(12,'User'); 
        $user->name=$request->first_name." ".$request->first_name; 
        $user->email=$request->email; 
        $user->password=$request->password; 
        $user->save();

       
        if (auth()->attempt($request->only(['email','password']))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }


    public function logout(Request $request)
    {
        auth()->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
