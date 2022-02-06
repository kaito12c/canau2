<?php

namespace App\Http\Controllers\Supporter\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
       
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::SUPPORTER_CREATE)->with('success', 'アカウント登録できました！')
                    : view('supporter.auth.verify-email');
    }
}
