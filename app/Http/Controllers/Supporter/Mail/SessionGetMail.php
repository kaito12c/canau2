<?php

namespace App\Http\Controllers\Supporter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SessionGetMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $attributes;
    public $StuEmail;
    public $StuName;
    public $title;
    public $start_at;
    public $SupEmail;
    public $SupName;
    public $company_name;
    public $id;


    // public function __construct($attributes)
    // {
    //     $this->attributes = $attributes;
    // }


    public function __construct($StuName, $StuEmail, $SupEmail, $SupName,$title, $start_at, $company_name, $id)
    {
        $this->StuEmail = $StuEmail;
        $this->StuName = $StuName;
        $this->start_at = $start_at;
        $this->title = $title;
        $this->SupName = $SupName;
        $this->SupEmail = $SupEmail;
        $this->company_name = $company_name;
        $this->id = $id;
        // $this->supporter = $supporter;
        // dd($StuEmail);



    }

    public function build()
    {
        return $this->view('supporter.emails.session-resister')
        ->to( ['email' => $this->StuEmail] )
        ->subject('[canau]進路相談の相談の申し込みがありました！');
    }
}
