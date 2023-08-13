<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribedToNewsletter;

class MainController extends Controller
{
    // public function subscribeNewsletterForm(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //     ]);

    //     $input = $request->all();

    //     Contact::create($input);

    //     Mail::to($input['email'])->send($input['name'], $input['email']);

    //     return redirect()->back()->with(['success' => 'Subscription to Newsletters Successful']);
    // }
}
