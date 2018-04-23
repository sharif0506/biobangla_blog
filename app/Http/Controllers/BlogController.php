<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index(Request $request) {
        if (!$request->session()->has('token_key')) {
            return redirect('login');
        }
        return view('blog.index');
    }

}
