<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmploymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $filePath;
    public $fileName;

    public function __construct($data, $filePath, $fileName)
    {
        $this->data = $data;
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    public function build()
    {
        return $this->subject('Employment Form Submission')
            ->view('emails.employment.employment-form') // The email template view
            ->attach($this->filePath, ['as' => $this->fileName]);
    }
}
