<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $title = 'portfolio';
        return view('frontend.portfolio',compact(
            'title'
        ));
    }

    public function single(){
        $title = 'portfolio Detail';
        return view('frontend.portfolio-details',compact(
            'title'
        ));
    }
}
