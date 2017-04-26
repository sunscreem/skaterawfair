<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
	public function store(Request $request)
    {
	 	$this->validate($request, [
    		'g-recaptcha-response' => 'required|recaptcha',
    	]);

       Mail::to(config('site.contactEmailAddress'))->queue(new ContactForm());
        
       flash('Thank you! Your message has been sent. We will be in touch shortly.', 'success');

       return back();
    }
}
