<?php

namespace App\Mail;

use App\Models\Message;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestInformation extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $contact_name;
    public $contact_email;

    /**
     * Create a new message instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact_name = $contact->name;
        $this->contact_email = $contact->email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request For Information',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.request-information',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
