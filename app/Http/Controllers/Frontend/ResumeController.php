<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function index(){
        $title = 'resume';
        $resume = Resume::first();
        $user = User::first();
        return view('frontend.resume',compact(
            'title','resume','user'
        ));
    }
}
