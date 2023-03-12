<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PagesComponents extends Component
{
    public function render()
    {
        return view('livewire.admin.pages-components')->layout('layouts.admin');
    }
}
