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
                  <a href="blog-list.html">Blog List</a>
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
            <img src="img/blog-1.jpg" alt="blog-details" />
            <div class="blog-det-content">
              <div class="blog-det-title">
                <h2>
                  <a href="#"
                    >Lorem ipsum dolor sit amet consectetur adipisicing elit
                    Sint quod soluta accusantium minus.</a
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
                  <p>02 Feb 2020</p>
                </li>
                <li>
                  <i class="far fa-folder-open"></i>
                  <p>Concert</p>
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
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Ducimus beatae veniam suscipit error unde voluptatibus pariatur
              eaque. Odit, ullam. Dolorum, dicta! Sunt molestias voluptates
              minima! Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. Tempore alias sapiente enim excepturi cumque impedit
              exercitationem similique eius iste soluta adipisci commodi quae,
              libero nulla necessitatibus harum accusantium temporibus ipsam,
              quidem molestiae atque repellat maxime et consectetur! Molestiae
              sapiente maiores inventore veritatis.
            </p>
          </div>
          <div class="blog-det-subtitle content-fluid">
            <h4>How to manage your concert?</h4>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Tenetur eos, sed eveniet dignissimos numquam provident nihil
              unde ullam quod molestiae nostrum! Totam iusto quibusdam, enim
              <a href="#">asperiores</a>neque pariatur voluptatum eos eum
              fuga, sequi, hic odit aspernatur earum? Ratione, atque incidunt.
            </p>
          </div>
          <div class="blog-det-quote">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
              distinctio nulla velit est quidem repellendus esse non saepe
              cumque sapiente.
            </p>
            <span>jaurge anderson</span>
          </div>
          <ul class="blog-det-list content-fluid">
            <li>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Delectus quaerat tenetur, <a href="#">aperiam</a>odit, ratione
                eligendi nulla quae praesentium quo, a reiciendis inventore
                facilis veniam voluptates.
              </p>
            </li>
            <li>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad
                ullam impedit, architecto porro voluptas sequi ab beatae saepe
                quo magnam
              </p>
            </li>
            <li>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit Ad
                ullam impedit architecto porro.
              </p>
            </li>
          </ul>
          <div class="blog-det-footer">
            <div class="blog-det-tag">
              <h4>Tags:</h4>
              <ul>
                <li><a href="#">Crowd</a></li>
                <li><a href="#">Party</a></li>
                <li><a href="#">Concert</a></li>
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
              <a href="#"><img src="img/comment-2.jpg" alt="author" /></a>
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
              <img src="img/blog-2.jpg" alt="blog-2" />
              <h4>
                <a href="#"
                  >Lorem ipsum dolor amet consectetur quod earum soluta
                  adipisicing.</a
                >
              </h4>
            </div>
            <div class="navigate-post">
              <img src="img/blog-3.jpg" alt="blog-3" />
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
                      ><img src="img/comment-1.jpg" alt="comment-1"
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
                          ><img src="img/comment-2.jpg" alt="comment-2"
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
                      ><img src="img/comment-3.jpg" alt="comment-3"
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
    
@endpush