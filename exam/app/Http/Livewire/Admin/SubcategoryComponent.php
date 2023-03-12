<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
class SubcategoryComponent extends Component
{
    use WithPagination;
    public $name;
    public $category;

    protected $rulse=[
        'name'  => 'required',
        'categoryy' => 'required'
    ];

    public function store()
    {
        $subcategory = new Subcategory();
        $subcategory->name = $this->name;
        $subcategory->cat_id = $this->category;
        $subcategory->slug   = Str::slug($this->name);
        $subcategory->save();
        session()->flash('message','SubCategory Insert Succefull');
    }
    public function render()
    {
        $subcategory = Subcategory::paginate(10);
        $category = Category::all();
        return view('livewire.admin.subcategory-component',['subcategories'=>$subcategory, 'categories'   => $category])->layout('layouts.admin');
    }
}
