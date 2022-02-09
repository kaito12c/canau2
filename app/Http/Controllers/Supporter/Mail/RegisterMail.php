<?php

namespace App\Http\Controllers\Supporter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $attributes;
    public $name;
    public $email;

    // public function __construct($attributes)
    // {
    //     $this->attributes = $attributes;
    // }


    public function __construct($name, $email)
    {

        $this->name = $name;
        $this->email = $email;
        // $this->supporter = $supporter;
        // dd($supporter);

    }

    public function build()
    {
        return $this->view('supporter.emails.resister')
        ->to( ['email' => $this->email] )
        ->subject('canauへのご登録ありがとうございます。');
    }
}
