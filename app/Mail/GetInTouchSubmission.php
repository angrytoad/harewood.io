<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GetInTouchSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $submissionMessage;

    /**
     * GetInTouchSubmission constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->name = $request['name'];
        $this->email = $request['email'];
        $this->submissionMessage = $request['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.get-in-touch-submission');
    }
}
