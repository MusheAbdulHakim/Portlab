@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/portfolio-details.css')}}" />
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>Portfolio Details</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="portfolio-list.html">Portfolio-list</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  portfolio-details
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
<section class="details-part">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <div class="details-img">
            <a href="#"
              ><img src="img/port-details-1.jpg" alt="port-details"
            /></a>
          </div>
          <div class="details-content-meta">
            <ul>
              <li>
                <i class="fas fa-eye"></i>
                <p>Views <span>(87)</span></p>
              </li>
              <li>
                <i class="fas fa-heart"></i>
                <p>Favourites <span>(46)</span></p>
              </li>
              <li>
                <i class="fas fa-comments"></i>
                <p>Comments <span>(29)</span></p>
              </li>
              <li>
                <i class="fas fa-share-square"></i>
                <p>Share <span>(63)</span></p>
              </li>
            </ul>
          </div>
          <div class="details-content">
            <h2>
              <a href="#"
                >Adhunik - Corporate and Bussiness Portfolio Bootstrap html
                template.</a
              >
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
              omnis sunt tempore tempora quo voluptates aperiam reiciendis
              distinctio quaerat animi modi! Tenetur magnam eius alias dicta
              cupiditate modi corrupti quidem aut qui natus voluptas sit. Vel
              aliquam non aliquid incidunt praesentium dolor odio minus
              corporis consectetur eius consequatur deleniti aperiam magni
              saepe ipsum iste quam quas illum enim animi quae iusto obcaecati
              pariatur placeat Quos et qui laborum hic repellendus.
            </p>
            <div class="details-sub-list">
              <h4>Feature of this item</h4>
              <ul>
                <li>Easy color change with SASS or Variable</li>
                <li>Huge set of UI elements and blocks</li>
                <li>
                  Compatible Browsers:IE11+, Firefox, Safari, Opera, Chrome,
                  Edge
                </li>
                <li>Images With jQuery Inner Zoom, outer Zoom</li>
                <li>Unlimited Category Page Variations</li>
                <li>Clean, Optimize & Commented code</li>
                <li>Blog List, Blog Grid and Single Post</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="details-card">
            <h5>More View</h5>
            <ul class="details-btn-list">
              <li>
                <a href="#" class="btn btn-outline"
                  ><i class="fas fa-heart"></i
                  ><span>Add to Favourite</span></a
                >
              </li>
              <li>
                <a href="#" class="btn btn-inline"
                  ><i class="far fa-eye"></i><span>live preview</span></a
                >
              </li>
            </ul>
          </div>
          <div class="details-card">
            <h5>Specification</h5>
            <ul class="details-meta-list">
              <li>
                <h6>Released</h6>
                <p>April 18, 2019</p>
              </li>
              <li>
                <h6>Last Update</h6>
                <p>December 4, 2020</p>
              </li>
              <li>
                <h6>Current Version</h6>
                <p>1.0.03</p>
              </li>
              <li>
                <h6>Layouts</h6>
                <p>Responsive</p>
              </li>
              <li>
                <h6>Total Page</h6>
                <p>08</p>
              </li>
              <li>
                <h6>Brand Color</h6>
                <p>#d8532b</p>
              </li>
              <li>
                <h6>Typography</h6>
                <p>Poppins</p>
              </li>
            </ul>
          </div>
          <div class="details-card">
            <h5>Programing Tools</h5>
            <ul class="details-meta-list">
              <li>
                <a href="#"><img src="img/html.png" alt="html" /></a>
                <p>HTML 5</p>
              </li>
              <li>
                <a href="#"><img src="img/css.png" alt="css" /></a>
                <p>CSS 3</p>
              </li>
              <li>
                <a href="#"
                  ><img src="img/javascript.png" alt="javascript"
                /></a>
                <p>Javascript ES6</p>
              </li>
              <li>
                <a href="#"
                  ><img src="img/bootstrap.png" alt="bootstrap"
                /></a>
                <p>Bootstrap 4.2.1</p>
              </li>
              <li>
                <a href="#"><img src="img/sass.png" alt="sass" /></a>
                <p>SASS/SCSS</p>
              </li>
            </ul>
          </div>
          <div class="details-card">
            <h5>Share This Item</h5>
            <ul class="details-share-list">
              <li>
                <a class="icon icon-inline" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li>
                <a class="icon icon-inline" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
              </li>
              <li>
                <a class="icon icon-inline" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </li>
              <li>
                <a class="icon icon-inline" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </li>
              <li>
                <a class="icon icon-inline" href="#"
                  ><i class="fab fa-dribbble"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="comment-part">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="comment-heading">
            <h3><span>(2)</span>Comments</h3>
          </div>
          <ul class="comment-list">
            <li>
              <div class="comment">
                <div class="comment-img">
                  <a href="#"
                    ><img src="img/comment-1.jpg" alt="comment-1"
                  /></a>
                </div>
                <div class="comment-content">
                  <h4>Tahmina Bonny <span>02 February 2020</span></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vero ab aperiam corrupti maiores animi nisi ratione maxime
                    quae in doloremque corporis tempore earum ut voluptas
                    exercitationem.
                  </p>
                  <div class="comment-reply">
                    <a href="#"
                      ><i class="fas fa-reply-all"></i><span>reply</span></a
                    >
                  </div>
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
                      <h4>Miron Mahmud <span>02 February 2020</span></h4>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Vero ab aperiam corrupti maiores animi nisi
                        ratione.
                      </p>
                      <div class="comment-reply">
                        <a href="#"
                          ><i class="fas fa-reply-all"></i
                          ><span>reply</span></a
                        >
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li>
              <div class="comment">
                <div class="comment-img">
                  <a href="#"
                    ><img src="img/comment-3.jpg" alt="comment-1"
                  /></a>
                </div>
                <div class="comment-content">
                  <h4>Labonno Khan <span>02 February 2020</span></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vero ab aperiam corrupti maiores animi nisi ratione maxime
                    quae in doloremque corporis tempore earum ut voluptas
                    exercitationem.
                  </p>
                  <div class="comment-reply">
                    <a href="#"
                      ><i class="fas fa-reply-all"></i><span>reply</span></a
                    >
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-12 col-lg-12">
          <form>
            <div class="row">
              <div class="col-lg-12">
                <div class="comment-heading"><h3>Leave your comment</h3></div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Your name"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Your email"
                  />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    placeholder="Your quote"
                  ></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-btn">
                  <button class="btn btn-inline">
                    <i class="fas fa-paper-plane"></i
                    ><span>post comment</span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('page-js')
    
@endpush