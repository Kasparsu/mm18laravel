<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $email;
    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $email, $title)
    {
        $this->content = $content;
        $this->email = $email;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
            ->replyTo($this->email)
            ->subject($this->title)
            ->view('mails.contact');
    }
}
