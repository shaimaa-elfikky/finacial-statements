<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
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

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password ], $this->remember)) {
            // Increment the login attempts
            //RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        return to_route('admin.index');


    }

    public function render()
    {
        //dd('iam the component!');
        return view('admin.auth.admin-login-component');
    }
}
