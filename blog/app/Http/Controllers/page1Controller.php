<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page1Controller extends Controller
{

    // Show blog post archive
    public function index () {
        return view('blog.page1');
    }
}
