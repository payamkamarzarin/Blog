<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function blog(){
        return view('blog');
    }

    public function Blog_details(){
        return view('Blog-details');
    }
}
