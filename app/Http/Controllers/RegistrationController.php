<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    //

    public function create(){

    	return view('registration.create');


    }

        public function store(){


        	$this->validate(request(),

        	[
			'name' => 'required',

        	'email' => 'required|email',

        	'password' => ' required|confirmed'

       		]

        	);

        	$user = User::create([ 
            
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            
            ]);

        	auth()->login($user);

            \Mail::to($user)->send(new Welcome($user));

            // session('message','Here is a default message');

            session()->flash('message','Thanks so much for signing up!');

        	return redirect()->home();


        	



    }
}
