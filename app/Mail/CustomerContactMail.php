<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Content;
//use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userMessage;
    public $name;
    public $email;
    public $phone;
    /**
     * Create a new message instance.
     */
    public function __construct($userMessage , $name , $email,$phone)
    {
        $this->userMessage = $userMessage;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function build()
    {
        return $this->subject("Customer Contact Mail From {$this->name}")
                    ->view('frontend.emails.customer-contact' , [
                        'email'=>$this->email,
                        'userMessage'=>$this->userMessage,
                        'name'=>$this->name,
                        'phone'=>$this->phone,
                    ]);
    }
}
