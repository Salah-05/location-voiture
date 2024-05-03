<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Voiture;

class DetailsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $voitures = Voiture::paginate(9);
        return view('livewire.details-component',['voitures'=>$voitures]);
    }
}
