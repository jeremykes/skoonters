<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Url;

class Unsubscribe extends Component
{
    #[Url]
    public $email = '';

    public $contact;

    public $unsubscribed = false;
    public $resubscribed = false;

    public function messages(): array
    {
        return [
            'email.required' => 'No email provided, please click the unsubscribe link in your email again.',
            'email.email' => 'Email not valid, please click the unsubscribe link in your email again.',
            'email.exists' => 'Email not found, please double check the email. Maybe you have already unsubscribed?',
        ];
    }

    public function unsubscribe()
    {
        $validated = $this->validate([
            'email' => 'required|email|exists:contacts',
        ]);

        $this->contact = Contact::where('email', $this->email)->first();
        $this->contact->subscribed = false;
        $this->contact->save();

        $this->unsubscribed = true;
    }

    public function resubscribe()
    {
        $this->contact->subscribed = true;
        $this->contact->save();

        $this->unsubscribed = false;
        $this->resubscribed = true;
    }

    public function render()
    {
        return view('livewire.unsubscribe');
    }
}
