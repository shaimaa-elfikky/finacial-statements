<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogoutComponent extends Component
{

    public function logout(){

        Auth::guard('web')->logout();

        session()->forget('guard.web');

        session()->regenerateToken();

        return to_route('admin.login');
    }


    public function render()
    {
        return view('admin.auth.admin-logout-component');
    }
}
