<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject($this->data['subject'])->from('webservices@globalplusonline.com')
            ->view('jobs.mail');
        if (isset($this->data['cv']) && !is_string($this->data['cv'])) {
            $email->attach($this->data['cv']->getRealPath(),
                [
                    'as' => $this->data['cv']->getClientOriginalName(),
                    'mime' => $this->data['cv']->getClientMimeType()
                ]);
        }
        return $email;
    }
}
