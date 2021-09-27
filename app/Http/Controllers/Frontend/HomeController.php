<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\User;
use App\Models\Quote;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $title = 'Home';
        $faqs = Faq::get();
        $quotes = Quote::get();
        $pricings = Pricing::get();
        $services = Service::get();
        $user = User::first();
        $social_accounts = $user->social_account;
        return view('frontend.home',compact(
            'title','faqs','quotes','pricings',
            'services','user','social_accounts'
        ));
    }
}
