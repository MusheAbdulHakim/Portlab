<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $title = 'contact';
        return view('frontend.contact',compact(
            'title'
        ));
    }
}
