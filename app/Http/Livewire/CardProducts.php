<?php

namespace App\Http\Livewire;

use App\Models\Faicon;
use Livewire\Component;
use Livewire\WithPagination;

class CardProducts extends Component
{

    use WithPagination;

    

    public function render()
    {
        $icons = Faicon::paginate(55);

        return view('livewire.card-products', compact('icons'));
    }
}
