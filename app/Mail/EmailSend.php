<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        //
        $this->msg=$contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Su datos han sido enviados al administrador del sitio web')->view('emailsend') ;
    }
}
