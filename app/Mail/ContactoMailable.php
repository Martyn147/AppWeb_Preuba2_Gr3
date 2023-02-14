<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Información a revisar";
    public $contacto;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function build()
    {
        return $this->view('pages.mail.viewMail');
    }

    public function __construct($contacto)
    {
        $this->contacto = $contacto;

    }

    
}
