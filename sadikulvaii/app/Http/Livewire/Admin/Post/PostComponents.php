<?php

namespace App\Http\Livewire\Admin\Post;

use Livewire\Component;

class PostComponents extends Component
{
    public function render()
    {
        return view('livewire.admin.post.post-components')->layout('layouts.admin');
    }
}
