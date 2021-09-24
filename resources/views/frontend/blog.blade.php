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
                    <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset($article->image)}}" alt="blog-1" />
                        <div class="blog-oly">
                            <p>
                            @php
                                foreach($article->tags as $tag){
                                    $tags_array[] = $tag->name;
                                }
                                $article_tags = implode(',',$tags_array);
                            @endphp
                            {{$article_tags}}
                            </p>
                        </div>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                <p>{{date_format(date_create($article->created_at),'d M,Y')}}</p>
                            </li>
                        <li>
                            <i class="flaticon-share"></i>
                            <p>5 share</p>
                        </li>
                        </ul>
                        <div class="blog-text">
                        <h4>
                            <a href="{{route('article',$article)}}"
                            >{{$article->title}}</a
                            >
                        </h4>
                        </div>
                        <ul class="blog-link">
                        <li><a class="btn btn-inline" href="{{route('article',$article)}}">read more</a></li>
                        <li>
                            <i class="flaticon-chat"></i>
                            <p>13 comments</p>
                        </li>
                        </ul>
                    </div>
                    </div>
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
                <form class="blog-src">
                <input type="text" placeholder="Search..." /><button>
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
                            <p>23</p>
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
                    ><img src="img/ad-banner.jpg" alt="ad-banner"
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