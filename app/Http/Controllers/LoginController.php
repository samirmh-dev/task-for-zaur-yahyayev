<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	// check if reCaptcha has been validated by Google      
	    $secret = env('GOOGLE_RECAPTCHA_SECRET_DEV');
	    $captchaId = $request->input('g-recaptcha-response');
	   
	    //sends post request to the URL and tranforms response to JSON
	    $responseCaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captchaId));
	    
	    if ($responseCaptcha->success !== true) {
	    	return redirect()->back()->withErrors(['Try again to prove you are a human!'])->withInput();
	    }
	    else {
	    	$credentials = $request->only('email', 'password');

	    	if (Auth::attempt($credentials)) {
            	// Authentication passed...
            	return redirect()->intended('admin/hotel');
       		}
       		else {
       			return redirect()->back()->withErrors(['Email and/or password invalid'])->withInput();
       		}
	    }
    }
}
