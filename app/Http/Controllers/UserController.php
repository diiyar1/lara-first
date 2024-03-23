<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //reigster form
    public function register(){
        return view('users.register');
    }

    //store new user
    public function storeUser(Request $request){
        
        // dd($request->file('logo'));
    $formFields = $request->validate([
        'name' => 'required',
        'email' => ['required','email',Rule::unique('users','email')],
        'password' => 'required|confirmed|min:6',
        
    ]);

    $formFields['password']= bcrypt($formFields['password']);
  

    // dd('Validation passed', $formFields);
    $user=User::create($formFields);

    //login
    auth()->login($user);
    
    // dd('Store method executed');
    return redirect('/');
}

    //logout
    public function logout(Request $request){
    
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

   
    //login
    public function login(){
    
        return view('users.login');
    }

     //store new user
     public function authi(Request $request){
        
        $formFields = $request->validate([
       
            'email' => ['required','email'],
            'password' => 'required',
        
    ]);

    if(auth()->attempt($formFields)){
        $request->session()->regenerate();
        
        return redirect('/');
    }
    return back()->withErrors(['email'=>'Invalid Credentiols'])->onlyInput('email');
        
}

}
