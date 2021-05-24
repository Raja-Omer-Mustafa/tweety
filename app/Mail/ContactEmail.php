<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class ContactEmail extends Mailable
{  public $data;
    use Queueable, SerializesModels;
    public function __construct($data)
    {
        $this->data=$data;
    }
     public function build()
    {
    $username =$this->data['username'];
    $email = $this->data['email'];
    $subject = $this->data['message'];
    return $this->markdown('emails.contact')
        ->subject($subject)
        ->with([
            'data'=>$this->data
       ]);
    }
    }
