<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Admincomponent extends Component
{
    public function render()
    {
        $titles = "Admin";
        return view('livewire.admin.admincomponent',['title' => $titles])->layout('layouts.admin');
    }
}
