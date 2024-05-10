<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Voiture;
use App\Models\Category;

class DetailsComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";

    public $min_value = 0;
    public $max_value = 25000;



    public function changePageSize($size){
        $this->pageSize = $size;
    }
    public function changeOrderBy($order){
        $this->orderBy = $order;
    }

    public function render()
    {
        if($this->orderBy == 'Price: Low to High'){
            $voitures= Voiture::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low'){
            $voitures= Voiture::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness'){
            $voitures= Voiture::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{$voitures= Voiture::whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pageSize);}


        $nvoitures = Voiture::latest()->take(3)->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.details-component',['voitures'=>$voitures,'nvoitures'=>$nvoitures,'categories'=>$categories]);
    }
}
