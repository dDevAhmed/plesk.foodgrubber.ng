<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\VerificationMail;
use Illuminate\Validation\Rule;
use App\Models\People\Subscriber;
use Illuminate\Support\Facades\Mail;


class SubscribeForm extends Component
{
    public $email = '';
    public $successMessage = '';
    public $errorMessage = '';
    public $submitting = false;

    public function submitForm()
    {
        $this->submitting = true;

        $this->validate([
            'email' => ['required', 'email', Rule::unique('subscribers', 'email')]
        ]);
    
        // Create a new subscriber record
        Subscriber::create([
            'email' => $this->email,
            'subscribed_at' => now(),
            'verification_token' => Str::random(40) // Generate a verification token
        ]);
    
        // Send a confirmation email
        Mail::to($this->email)->send(new VerificationMail($this->email));
    
        $this->successMessage = 'Thank you for subscribing! Please check your email to confirm your subscription.';
        // $this->errorMessage = 'This email has already subscribed.';
        $this->reset('email'); // Clear the form field

        $this->submitting = false;
    }

    public function render()
    {
        return view('livewire.subscribe-form');
    }
}
