<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    // Show blog post archive
    public function index () {
        return view('blog.index');
    }
}
