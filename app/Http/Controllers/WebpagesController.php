<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpagesController extends Controller
{
    public function index(){
       return view('webpages.index');
    }

    public function events(){
        return view('webpages.events');
    }

    public function projects(){
        return view('webpages.projects');
    }

    public function partnarship(){
        return view('webpages.partnarship');
    }

    public function about(){
        return view('webpages.about');
    }

    public function team(){
        return view('webpages.team');
    }

    public function contact(){
        return view('webpages.contact');
    }
}
