<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RegisteredUserController extends Controller
{
    public function create(){ 
        return view('auth.register');
    }

    public function store(){ 
        
         $validated=request()->validate([
            'firstName' => ['required','min:3'],
            'lastName' =>['required'],
            'email' => ['required','email','max:254'],
            'password' =>['required',Password::min(5),'confirmed']
        ]);
        $user = User::create($validated);
        Auth::login($user);
        return redirect('/jobs');
    }
}
