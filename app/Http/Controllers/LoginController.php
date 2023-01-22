<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller {

    public function showView(){
        return view("login");
    }

    public function login(Request $request){
        if($this->attemptLogin($request)){
            return $this->sendLoginResponse($request);
        }
        return $this->sendFailedLoginResponse($request);
    }

    protected function attemptLogin(Request $request)
    {
        if(Auth::guard()->user()!=null){
            return false;
        }
        return Auth::guard()->attempt($this->credentials($request), $request->filled('remember'));
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        return redirect("/");
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }


}