<?php

namespace App\Http\Livewire\Front;

use App\Models\Category;
use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function qtyupdate($rowId)
    {
       $product = Cart::get($rowId);
       $qty = $product->qty+1;

       Cart::update($rowId, $qty);
       session()->flash('message', 'Cart Updated ');
       return redirect()->back();

    }
    public function qtyupdateDec($rowId)
    {
       $product = Cart::get($rowId);
       $qty = $product->qty-1;

       Cart::update($rowId, $qty);
       session()->flash('message', 'Cart Updated ');
       return redirect()->back();

    }
public function removeCart($rowId)
{
    Cart::remove($rowId);
    session()->flash('message', 'Cart Updated ');
    return redirect()->back();
}
    public function render()
    {
        $category = Category::all();
        return view('livewire.front.cart-component',[
            'categories'    =>$category,


        ])->layout('layouts.home');;
    }
}
