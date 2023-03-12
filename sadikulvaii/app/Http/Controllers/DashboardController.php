<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $auth       = Auth::user();
        $users      = DB::table('role_user')->where('user_id', $auth->id)->first();
        if($users->role_id== 1)
        {
            return redirect()->route('admin');
        }elseif($users->role_id == 2)
        {
            return redirect()->route('user');
        }

    }
}
