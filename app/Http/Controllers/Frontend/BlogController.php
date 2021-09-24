<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $title = 'blog List';
        return view('frontend.blog',compact(
            'title'
        ));
    }

    public function single(){
        $title = 'blog Detail';
        return view('frontend.blog-details',compact(
            'title'
        ));
    }
}
