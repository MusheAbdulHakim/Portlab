<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\User;
use App\Models\Quote;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reference;
use App\Models\Resume;

class HomeController extends Controller
{
    public function index(){
        $title = 'Home';
        $faqs = Faq::get();
        $quotes = Quote::get();
        $pricings = Pricing::get();
        $services = Service::get();
        $resume = Resume::first();
        $user = User::first();
        $references = Reference::get();
        return view('frontend.home',compact(
            'title','faqs','quotes','pricings',
            'services','resume','user','references',
        ));
    }
}
