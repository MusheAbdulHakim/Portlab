<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reference;

class ResumeController extends Controller
{
    public function index(){
        $title = 'resume';
        $resume = Resume::first();
        $user = User::first();
        $references = Reference::get();
        return view('frontend.resume',compact(
            'title','resume','user','references'
        ));
    }
}
