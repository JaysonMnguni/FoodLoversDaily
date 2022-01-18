<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $first_name;
    public $last_name;
    public $email;
    public $message_body;

    public function __construct($first_name, $last_name, $email, $message_body)
    {
        $this->first_name      = $first_name;
        $this->last_name       = $last_name;
        $this->email           = $email;
        $this->message_body    = $message_body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->view('emails.contact');
    }
}
