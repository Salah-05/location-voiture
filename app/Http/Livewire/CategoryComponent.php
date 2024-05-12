<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Voiture;
use App\Models\Category;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $slug;

    public $min_value = 0;
    public $max_value = 25000;



    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function changeOrderBy($order){
        $this->orderBy = $order;
    }
    
    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;



        if($this->orderBy == 'Price: Low to High'){
            $voitures= Voiture::where('category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low'){
            $voitures= Voiture::where('category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness'){
            $voitures= Voiture::where('category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')->paginate($this->pageSize);
        }
        else{$voitures= Voiture::where('category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pageSize);}


        $nvoitures = Voiture::latest()->take(3)->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['voitures'=>$voitures,'nvoitures'=>$nvoitures,'categories'=>$categories,'category_name'=>$category_name]);
    }
}
