<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function post(){
        return view('site.post');
    }
    public function newstory(){
        return view('site.newstory');
    }
    public function author(){
        return view('site.author');
    }
}
