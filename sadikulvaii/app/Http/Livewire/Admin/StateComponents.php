<?php

namespace App\Http\Livewire\Admin;

use App\Models\state;
use Livewire\Component;

class StateComponents extends Component
{
    public function render()
    {
        $state = state::orderBy('id','desc')->get();

        return view('livewire.admin.state-components',['states' => $state])->layout('layouts.admin');
    }
}
