<?php

namespace App\Http\Livewire;
use App\Models\Voiture;

use Livewire\Component;

class DetailsCarComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $voiture = Voiture::where('slug',$this->slug)->first();
        $rvoitures = Voiture::where('category_id',$voiture->category_id)->inRandomOrder()->limit(4)->get();
        $nvoitures = Voiture::latest()->take(3)->get();
        return view('livewire.details-car-component',['voiture'=>$voiture,'rvoitures'=>$rvoitures,'nvoitures'=>$nvoitures]);
    }
}
