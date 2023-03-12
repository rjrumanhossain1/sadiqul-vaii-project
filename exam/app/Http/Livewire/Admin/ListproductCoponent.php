<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ListproductCoponent extends Component
{
    public function render()
    {
        $product = Product::paginate(10);
        return view('livewire.admin.listproduct-coponent',['products'   => $product])->layout('layouts.admin');
    }
}
