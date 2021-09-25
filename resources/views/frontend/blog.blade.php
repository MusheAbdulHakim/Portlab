@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/blog-list.css')}}" />
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>Blog List</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blog List
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

@section('content')
<section class="blog-list-part">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-md-6 col-lg-6">
                    <x-article :article="$article" />
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"
                        ><i class="fas fa-long-arrow-alt-left"></i
                        ></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">...</li>
                    <li class="page-item">
                        <a class="page-link" href="#">67</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"
                        ><i class="fas fa-long-arrow-alt-right"></i
                        ></a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- right side  --}}
        <div class="col-lg-4">
            <div class="row">
            <div class="col-lg-12">
                <form class="blog-src" method="post" action="{{route('article.search')}}">
                    @csrf
                <input type="text" placeholder="Search..." />
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </form>
            </div>
            <div class="col-md-7 col-lg-12">
                <div class="blog-filter">
                <h4>popular post</h4>
                <div class="blog-suggest">
                    <div class="suggest-img">
                    <a href="#"
                        ><img src="img/suggest-1.jpg" alt="suggest-1"
                    /></a>
                    </div>
                    <div class="suggest-content">
                    <div class="suggest-title">
                        <h6>
                        <a href="#"
                            >Business contents insurance is a type of
                            business.</a
                        >
                        </h6>
                    </div>
                    <div class="suggest-date">
                        <i class="flaticon-calendar"></i>
                        <p>02 feb 2020</p>
                    </div>
                    </div>
                </div>
                <div class="blog-suggest">
                    <div class="suggest-img">
                    <a href="#"
                        ><img src="img/suggest-2.jpg" alt="suggest-2"
                    /></a>
                    </div>
                    <div class="suggest-content">
                    <div class="suggest-title">
                        <h6>
                        <a href="#"
                            >Business contents insurance is a type of
                            business.</a
                        >
                        </h6>
                    </div>
                    <div class="suggest-date">
                        <i class="flaticon-calendar"></i>
                        <p>02 feb 2020</p>
                    </div>
                    </div>
                </div>
                <div class="blog-suggest">
                    <div class="suggest-img">
                    <a href="#"
                        ><img src="img/suggest-3.jpg" alt="suggest-3"
                    /></a>
                    </div>
                    <div class="suggest-content">
                    <div class="suggest-title">
                        <h6>
                        <a href="#"
                            >Business contents insurance is a type of
                            business.</a
                        >
                        </h6>
                    </div>
                    <div class="suggest-date">
                        <i class="flaticon-calendar"></i>
                        <p>02 feb 2020</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-12">
                <div class="blog-filter">
                <h4>Top categories</h4>
                <ul class="blog-cate">
                    @foreach ($categories as $category)
                        <li>
                            <h5><a href="">{{$category->name}}</a></h5>
                            <p>{{$category->articles->count()}}</p>
                        </li>
                    @endforeach
                </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="blog-filter">
                <h4>Best tags</h4>
                <ul class="blog-tag">
                    @foreach ($tags as $tag)
                    <li><a href="#">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="blog-filter">
                <h4>follow us</h4>
                <ul class="blog-icon">
                    <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="blog-ad">
                <a href="#"
                    ><img src="{{asset('img/ad-banner.jpg')}}" alt="ad-banner"
                /></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

@push('page-js')
    
@endpush