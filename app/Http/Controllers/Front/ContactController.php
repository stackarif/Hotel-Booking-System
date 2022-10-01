<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function contact(Request $request){

        Contact::create($request->all());
        //session()->flash('success', 'Thanks for Contact with us!');

        return back();

     }
}
