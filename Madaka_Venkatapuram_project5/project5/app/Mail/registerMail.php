<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class registerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userev;

    /**
     * Create a new message instance.
     *
     * @param $userev
     */
    public function __construct($userev)
    {
        //
        $this->userev = $userev;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.registerform');
    }
}
