<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class AddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $category;
    public $subcategory;
    public $price;
    public $qty;
    public $sdesc;
    public $ldesc;
    public $status;
    public $image;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'sdesc' => 'required',
            'image' => 'required',
        ]);

            $product = new Product();
            $product->name           = $this->name;
            $product->slug           = Str::slug($this->name);
            $product->cat_id         = $this->category;
            $product->subcat_id      = $this->subcategory;
            $product->price          = $this->price;
            $product->qty            = $this->qty;
            $product->short_des      = $this->sdesc;
            $product->long_des       = $this->ldesc;
            $product->status         = $this->status==true?'1':'0';
            $product->image          = $this->image->store('photos');
            $product->save();
            session()->flash('message','Product Insert Successfully');

    }




    public function render()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();

        return view('livewire.admin.add-product-component',
        [
            'categories' => $category,
            'subcategoris'  =>$subcategory
        ])->layout('layouts.admin');
    }
}
