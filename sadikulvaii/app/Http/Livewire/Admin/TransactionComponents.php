<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class TransactionComponents extends Component
{
    public function render()
    {
        return view('livewire.admin.transaction-components')->layout('layouts.admin');
    }
}
