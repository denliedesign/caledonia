<?php

namespace App\Http\Controllers;

use App\Mail\ReferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReferController extends Controller
{

    public function create()
    {
        return view('/dance-classes');
    }

    public function store(Request $request)
    {
        $refer = request()->validate([
            'parentName' => 'required',
            'studentName' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'referralName' => 'required',

        ]);

        Mail::to('customdenlie@gmail.com')->send(new ReferMail($refer));

        return redirect('/fall')->with('message', 'Thank You, We Will Be In Touch. Register For Specific Classes Below.');

    }

}
