<?php

namespace App\Livewire;

use App\Mail\RequestInformation;
use App\Mail\SubscribedToNewsletter;
use App\Models\Contact;
use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;

class Home extends Component
{
    public $subscribeEmail = "";
    public $requestEmail = "";
    public $requestName = "";
    public $requestMessage = "";
    public $subscribed = false;
    public $requested = false;

    public function messages(): array
    {
        return [
            'subscribeEmail.required' => 'Please enter an email.',
            'subscribeEmail.email' => 'Please enter a valid email.',
            'requestEmail.required' => 'Please enter an email.',
            'requestEmail.email' => 'Please enter a valid email.',
            'requestName.required' => 'Please enter a name.',
            'requestMessage.required' => 'Please enter a message.',
        ];
    }

    public function subscribeToNewsletter()
    {
        $validated = $this->validate([
            'subscribeEmail' => 'required|email',
        ]);

        $contact = Contact::firstOrCreate([
            'email' => $this->subscribeEmail
        ]);

        // Send email
        Mail::to($contact->email)->send(new SubscribedToNewsletter($contact));

        $this->subscribed = true;
    }

    public function requestInfo()
    {
        $validated = $this->validate([
            'requestEmail' => 'required|email',
            'requestName' => 'required',
            'requestMessage' => 'required',
        ]);

        $contact = Contact::firstOrCreate([
            'email' =>  $this->requestEmail
        ]);

        $contact->name = $this->requestName;
        $contact->save();

        $message = Message::create(
            ['message' =>  $this->requestMessage, 'contact_id' => $contact->id]
        );

        // Send email
        Mail::to($contact->email)->send(new RequestInformation($contact));

        $this->requested = true;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
