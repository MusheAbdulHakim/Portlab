<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Quote;
use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $title = 'Home';
        $faqs = Faq::get();
        $quotes = Quote::get();
        $pricings = Pricing::get();
        return view('frontend.home',compact(
            'title','faqs','quotes','pricings'
        ));
    }
}
