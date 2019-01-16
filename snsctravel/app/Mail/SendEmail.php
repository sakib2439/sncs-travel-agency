<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $nam;
     public $mail;
     public $sub;
     public $mes;

    public function __construct($name, $email, $subject, $message)
    {
        $this->nam = $name;
        $this->mail = $email;
        $this->sub = $subject;
        $this->mes = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $e_name = $this->nam;
        $e_email = $this->mail;
        $e_subject = $this->sub;
        $e_message = $this->mes;

        return $this->view('pages.sendmail', compact('e_name','e_email','e_message'))->subject($e_subject);


    }
}
