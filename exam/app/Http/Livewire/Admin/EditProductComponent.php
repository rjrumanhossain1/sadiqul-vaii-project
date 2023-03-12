<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class EditProductComponent extends Component
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
    public $newimage;
    public $prod_id;

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->name = $product->name;
        $this->category = $product->cat_id;
        $this->subcategory = $product->subcat_id;
        $this->price = $product->price;
        $this->qty = $product->qty;
        $this->sdesc = $product->short_des;
        $this->ldesc = $product->long_des;
        $this->status = $product->status;
        $this->image = $product->image;
        $this->prod_id  = $product->id;

    }

    public function Update()
    {
        $this->validate([
            'image' => 'required',
        ]);

            $product = Product::find($this->prod_id);
            // dd($product);
            $product->name           = $this->name;
            $product->slug           = Str::slug($this->name);
            $product->cat_id         = $this->category;
            $product->subcat_id      = $this->subcategory;
            $product->price          = $this->price;
            $product->qty            = $this->qty;
            $product->short_des      = $this->sdesc;
            $product->long_des       = $this->ldesc;
            $product->status         = $this->status==true?'1':'0';
            if($this->newimage)
            {
                unlink('uploads'.'/'.$product->image);
                $product->image          = $this->newimage->store('photos');
            }

            $product->save();
            session()->flash('message','Product Update Successfully');
    }


    public function render()
    {
        $category = Category::all();
        $subcategory = Subcategory::all();

        return view('livewire.admin.edit-product-component',[
            'categories' => $category,
            'subcategoris'  =>$subcategory
        ])->layout('layouts.admin');
    }
}
