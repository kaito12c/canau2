<?php

namespace App\Http\Controllers\Supporter\Auth;

use App\Models\Supporter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('supporter.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:supporters,email'],
            'password' => ['required', 'confirmed', 'string','max:255', 'min:7',  Rules\Password::defaults()],
        ]);

        $user = Supporter::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'email' => $request->email,
            //パスワードの暗号化
            'password' => Hash::make($request->password),
            
        ]);




        event(new Registered($user));
        ddd($user);

        //ログイン済みの場合
        Auth::login($user);

        //flash.blade.phpにて標示
        return redirect(RouteServiceProvider::SUPPORTER_CREATE)->with('success', 'アカウント登録できました！');
        
    }
}
