<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $title = 'resume';
        return view('frontend.resume',compact(
            'title'
        ));
    }
}
