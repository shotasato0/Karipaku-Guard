<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Session;

class ShowLoginSuccessMessage
{
    public function handle(Verified $event)
    {
        Session::flash('login_success', 'ログインしました');
    }
}
