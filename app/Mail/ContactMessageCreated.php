<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.messages.created')
                     ->with([
                        'name'=>'Lengam',
                        'email'=>'lengam@live.com',
                        'msg'=>'Je content de vous avoir rencotrer.Merci pour tout ce que vous faites'
                        ]);
    }
}
