<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
{
    if ( ! Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribe($request->user_email);
    }
    return redirect('newsletter')->success('status', 'You are already Subscribed!!');
}

    public function create()
    {
        
    }
}
