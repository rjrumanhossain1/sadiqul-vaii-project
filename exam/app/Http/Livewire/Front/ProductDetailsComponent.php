<?php

namespace App\Http\Livewire\Front;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;
class ProductDetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }


    public function store($product_id, $product_name, $product_price)
    {
        // dd($product_price);
       $cartItem = Cart::add($product_id, $product_name, 1, $product_price);
       $cartItem->associate('App\Models\Product');
       session()->flash('message', 'Cart Added');
       return redirect()->back();
    }
    public function render()
    {
        $category = Category::all();
        $product = Product::where('slug', $this->slug)->first();

        return view('livewire.front.product-details-component',
        [
            'productDetails' => $product,
            'categories'    =>$category

        ])->layout('layouts.home');
    }
}
