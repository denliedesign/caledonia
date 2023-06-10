<?php

namespace App\Http\Controllers;

use App\Mail\EmploymentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmploymentController extends Controller
{
    public function create()
    {
        return view('employment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required',
            'danceStyles' => 'required',
            'story' => 'required',
            'additionalInfo' => 'nullable',
            'availability' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle the file upload
        if (request()->hasFile('resume')) {
            $file = request()->file('resume');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->getRealPath();
        }

        // Send email with attachment
        Mail::to('info@CaledoniaDanceAndMusic.com')->send(new EmploymentMail($data, $filePath, $fileName));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');
//        return redirect()->back()->with('success', 'Form submitted successfully! We will contact you soon.');


    }
}
