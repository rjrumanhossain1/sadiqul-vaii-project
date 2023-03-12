<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
class UserComponents extends Component
{
    use WithPagination;
    public function render()
    {
        $user_role      = DB::table('role_user')->where('role_id','2')->first();
        $user = User::where('id', $user_role->user_id)->get();

        return view('livewire.admin.users.user-components',['users' => $user])->layout('layouts.admin');
    }
}
