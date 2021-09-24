@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/blog-details.css')}}" />      
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>Blog Details</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="{{route('blog')}}">Blog List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blog Details
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
<section class="blog-det-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-det-banner">
            <img src="{{asset($article->image)}}" alt="thumbnail" />
            <div class="blog-det-content">
              <div class="blog-det-title">
                <h2>
                  <a href="#"
                    >{{$article->title}}</a
                  >
                </h2>
              </div>
              <ul class="blog-det-meta">
                <li>
                  <i class="far fa-user"></i>
                  <p>By Admin</p>
                </li>
                <li>
                  <i class="far fa-calendar-alt"></i>
                  <p>{{date_format(date_create($article->created_at),'d M, Y')}}</p>
                </li>
                <li>
                  <i class="far fa-folder-open"></i>
                  <p>{{$article->category->name}}</p>
                </li>
                <li>
                  <i class="far fa-comments"></i>
                  <p>37 Comment</p>
                </li>
                <li>
                  <i class="far fa-share-square"></i>
                  <p>21 Share</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="blog-det-descrip content-fluid">
            {!! htmlspecialchars_decode($article->content) !!}
            
          </div>
          <div class="blog-det-quote"></div>
          <div class="blog-det-footer">
            <div class="blog-det-tag">
              <h4>Tags:</h4>
              <ul>
                @foreach ($article->tags as $tag)
                  <li><a href="#">{{$tag->name}}</a></li>
                @endforeach
              </ul>
            </div>

            <div class="blog-det-share">
              <h4>Share:</h4>
              <ul>
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
          <div class="blog-det-author">
            <div class="author-img">
              <a href="#"><img src="{{asset('img/comment-2.jpg')}}" alt="author" /></a>
              <ul class="author-social">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
            <div class="author-content">
              <h4>Margarate Threcher <a href="#">www.margarate.com</a></h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                ab aperiam corrupti maiores animi nisi ratione maxime quae in
                doloremque corporis tempore earum ut voluptas exercitationem.
              </p>
            </div>
          </div>
          <div class="blog-det-navigate">
            <div class="navigate-post">
              <img src="{{asset('img/blog-2.jpg')}}" alt="blog-2" />
              <h4>
                <a href="#"
                  >Lorem ipsum dolor amet consectetur quod earum soluta
                  adipisicing.</a
                >
              </h4>
            </div>
            <div class="navigate-post">
              <img src="{{asset('img/blog-3.jpg')}}" alt="blog-3" />
              <h4>
                <a href="#"
                  >Lorem ipsum dolor amet consectetur quod earum soluta
                  adipisicing.</a
                >
              </h4>
            </div>
            <a href="#" class="prev-arrow"
              ><i class="fas fa-long-arrow-alt-left"></i>Previous Post</a
            ><a href="#" class="next-arrow"
              >Next Post<i class="fas fa-long-arrow-alt-right"></i
            ></a>
          </div>
          <div class="blog-det-comment">
            <h3>Comments (3)</h3>
            <ul class="comment-list">
              <li>
                <div class="comment">
                  <div class="comment-img">
                    <a href="#"
                      ><img src="{{asset('img/comment-1.jpg')}}" alt="comment-1"
                    /></a>
                  </div>
                  <div class="comment-content">
                    <h4>Miron Mahmud <span>02 February 2020</span></h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Vero ab aperiam corrupti maiores animi nisi ratione
                      maxime quae in doloremque corporis tempore earum ut
                      voluptas exercitationem.
                    </p>
                  </div>
                  <div class="comment-reply">
                    <a href="#"><i class="fas fa-reply-all"></i>reply</a>
                  </div>
                </div>
                <ul>
                  <li>
                    <div class="comment">
                      <div class="comment-img">
                        <a href="#"
                          ><img src="{{asset('img/comment-2.jpg')}}" alt="comment-2"
                        /></a>
                      </div>
                      <div class="comment-content">
                        <h4>Tahmina Bonny <span>02 February 2020</span></h4>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Vero ab aperiam corrupti maiores animi nisi
                          ratione maxime quae in doloremque corporis tempore
                          earum ut voluptas exercitationem.
                        </p>
                      </div>
                      <div class="comment-reply">
                        <a href="#"><i class="fas fa-reply-all"></i>reply</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="comment">
                  <div class="comment-img">
                    <a href="#"
                      ><img src="{{asset('img/comment-3.jpg')}}" alt="comment-3"
                    /></a>
                  </div>
                  <div class="comment-content">
                    <h4>Labonno Khan <span>02 February 2020</span></h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Vero ab aperiam corrupti maiores animi nisi ratione
                      maxime quae in doloremque corporis tempore earum ut
                      voluptas exercitationem.
                    </p>
                  </div>
                  <div class="comment-reply">
                    <a href="#"><i class="fas fa-reply-all"></i>reply</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="blog-det-form">
            <h3>Leave Your Comment</h3>
            <form>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Your Name"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Your Email"
                    />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      placeholder="Your Comment"
                    ></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-btn">
                    <button type="submit" class="btn btn-inline">
                      <i class="fas fa-tint"></i
                      ><span>Drop your comment</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>   
@endsection

@push('page-js')
    <script>
      var blockquote = document.querySelector('blockquote');
      var quote = $('.blog-det-quote').append(blockquote);
      
    </script>
@endpush