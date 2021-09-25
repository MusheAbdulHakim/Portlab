<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Quote;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(){
        $title = 'services';
        $faqs = Faq::get();
        $quotes = Quote::get();
        $pricings = Pricing::get();
        $services = Service::get();
        return view('frontend.services',compact(
            'title','quotes','faqs','pricings','services'
        ));
    }
}
