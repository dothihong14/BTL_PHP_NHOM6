<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Password;

use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    public function sendResetLink()
    {
        $this->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(['email' => $this->email]);

        session()->flash('status', $status === Password::RESET_LINK_SENT
            ? 'Link đặt lại mật khẩu đã được gửi!'
            : 'Không thể gửi link đặt lại mật khẩu.');
    }

    public function render()
    {
        return view('livewire.forgot-password');
    }
}
