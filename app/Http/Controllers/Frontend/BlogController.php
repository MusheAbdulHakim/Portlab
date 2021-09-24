<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Backpack\NewsCRUD\app\Models\Tag;
use Backpack\NewsCRUD\app\Models\Article;
use Backpack\NewsCRUD\app\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $title = 'blog List';
        $articles = Article::get();
        $categories =  Category::get();
        $tags = Tag::get();
        return view('frontend.blog',compact(
            'title','articles','categories','tags'
        ));
    }

    public function single(Request $request, Article $article){
        $title = 'blog Detail';
        return view('frontend.blog-details',compact(
            'title','article',
        ));
    }
}
