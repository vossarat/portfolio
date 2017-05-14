<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;


class ContactMeController extends Controller
{
    public function ContactMe(ContactMeRequest $request) //
    {
        if($request->ajax()){
                return "AJAX";
            }
            return "HTTP";
    }
}
