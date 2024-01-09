<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products\Product;

class Livesearch extends Component
{
    public function render()
    {
        return view('livewire.livesearch');
    }

    public $query = '';
    public $results = [];

    public function mount()
    {
        // Fetch initial results if needed
        $this->reset();
    }

    public function reset(...$properties){
        $this->query = '';
        $this->results = [];
    }
    
    public function UpdatedQuery()
    {
        $this->results = Product::where('name', 'like', '%' . $this->query . '%')->get();
    }
}
