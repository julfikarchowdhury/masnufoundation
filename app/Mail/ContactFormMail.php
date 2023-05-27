<?php

// app/Mail/ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->subject('Contact Form Submission')
            ->with([
                'name' => $this->formData['name'],
                'email' => $this->formData['email'],
                'subject' => $this->formData['subject'],
                'emailMessage' => $this->formData['message'],
            ]);
    }
}
