<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class AdminLoginComponent extends Component
{

    public $email;
    public $password;
    public $remember;


    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required',
            'remember' => 'nullable',
        ];
    }

    public function submit()
    {
        $this->validate();
    }
    public function render()
    {
        //dd('iam the component!');
        return view('admin.auth.admin-login-component');
    }
}
