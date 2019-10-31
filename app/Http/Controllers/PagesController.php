<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function adminpostpage(){
        return view('adminpostpage');
    }

    public function adminpostaction(){
        return view('admin-post-action');
    }
}
