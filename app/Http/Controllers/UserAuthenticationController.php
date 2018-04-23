<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserAuthenticationController extends Controller {

    public function index(Request $request) {
        if ($request->session()->has('token_key')) {
            return redirect('home');
        }
        return view('authentication.index');
    }

    public function attemptLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $encodedEmail = bcrypt($email);
            $encodedPassword = bcrypt($password);
            $value = $encodedEmail . $encodedPassword;
            $request->session()->put('token_key', $value);
            return redirect('home');
        }
        return view('authentication.index')->withErrors('Invalid email or password');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('login');
    }

}
