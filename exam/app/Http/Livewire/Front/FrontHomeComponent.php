<?php

namespace App\Http\Livewire\Front;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;
class FrontHomeComponent extends Component
{

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
        $product = Product::orderby('id','desc')->limit(6)->get();
        // dd($product);
        $allproduct = Product::all();
        return view('livewire.front.front-home-component',
        [
            'categories'    =>$category,
            'products'      =>$product,
            'allproducts'   =>$allproduct

        ])->layout('layouts.home');
    }
}
