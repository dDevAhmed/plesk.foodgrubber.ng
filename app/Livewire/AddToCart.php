<?php

namespace App\Livewire;

use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    
    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        if (auth()->guest()) {
            // Redirect to login or display a message
            return redirect()->route('login');
        }

        // Implement cart logic (e.g., using a cart model or session)
        // ...

        $this->emit('cartUpdated'); // Emit event for cart counter
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
