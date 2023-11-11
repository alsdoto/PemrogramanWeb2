<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     * @return void
     */

     //parameter yang digunakan adalah title dan name
     public $title;
     public $name;
    public function __construct($title, $name)
    {
        //
        $this->title = $title;
        $this->name =$name;
    }

    /**
     * Build the message.
     * 
     * @return $this
     */

    public function build()
    {
        return $this->subject('Testing Send Mail')->view('emails.posts');
    }
}
