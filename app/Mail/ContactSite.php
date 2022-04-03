<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSite extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * @var \stdClass
     */
    public $contact;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Recebemos sua mensagem!');
        $this->to($this->contact->email, $this->contact->name);
        return $this->markdown('mail.contact-site', [
            'contact' => $this->contact
        ]);
    }
}
