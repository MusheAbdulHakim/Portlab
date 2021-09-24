@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/portfolio-list.css')}}" />
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>My Portfolio</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  portfolio
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
<section class="feature-part">
    <div class="container">
      <div class="feature-slider">
        <div class="feature-card">
          <i class="flaticon-creativity"></i>
          <h6>creative design</h6>
        </div>
        <div class="feature-card">
          <i class="flaticon-tools-and-utensils"></i>
          <h6>clean code</h6>
        </div>
        <div class="feature-card">
          <i class="flaticon-credit-card"></i>
          <h6>easy customize</h6>
        </div>
        <div class="feature-card">
          <i class="flaticon-devices"></i>
          <h6>responsive site</h6>
        </div>
        <div class="feature-card">
          <i class="flaticon-bar-chart"></i>
          <h6>seo friendly</h6>
        </div>
        <div class="feature-card">
          <i class="flaticon-creativity"></i>
          <h6>creative design</h6>
        </div>
      </div>
    </div>
</section>
<section class="port-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="port-heading">
            <h2>see my best works</h2>
            <p>You can try search for quick jump and also click category</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="port-src">
            <form class="port-form">
              <input
                type="text"
                placeholder="Search for quick jump..."
              /><select class="custom-select">
                <option selected>wordpress</option>
                <option value="1">laravel</option>
                <option value="2">react</option>
                <option value="3">node</option>
                <option value="4">html</option></select
              ><button class="btn btn-inline">
                <i class="flaticon-magnifying-glass"></i><span>search</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="port-menu">
            <li>
              <button class="menu active" type="button" data-filter="all">
                all project
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".html">
                html
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".sass">
                sass
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".react">
                react
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".word">
                wordpress
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".soft">
                software
              </button>
            </li>
            <li>
              <button class="menu" type="button" data-filter=".plugin">
                plugin
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="row port-parent">
        <div class="col-sm-6 col-lg-4 mix html">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-1.jpg" alt="port-1" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Corporate website</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix sass">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-2.jpg" alt="port-1" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix react">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-3.jpg" alt="port-3" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix word">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-4.jpg" alt="port-4" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix soft">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-5.jpg" alt="port-5" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix plugin">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-6.jpg" alt="port-6" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix html">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-7.jpg" alt="port-7" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix sass">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-8.jpg" alt="port-8" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix react">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-9.jpg" alt="port-9" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix word">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-10.jpg" alt="port-10" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix soft">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-11.jpg" alt="port-11" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix plugin">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-12.jpg" alt="port-12" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix html">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-13.jpg" alt="port-13" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix sass">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-14.jpg" alt="port-14" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix react">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-15.jpg" alt="port-15" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix soft">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-16.jpg" alt="port-16" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix plugin">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-17.jpg" alt="port-17" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mix word">
          <div class="port-card">
            <div class="port-img">
              <img src="img/port-18.jpg" alt="port-18" />
            </div>
            <div class="port-oly">
              <div class="port-btn">
                <a class="btn btn-inline" href="#">live preview</a
                ><a class="btn btn-inline" href="#">view details</a>
              </div>
              <div class="port-text"><h6>Personal Portfolio</h6></div>
            </div>
          </div>
        </div>
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
            <li class="page-item"><a class="page-link" href="#">67</a></li>
            <li class="page-item">
              <a class="page-link" href="#"
                ><i class="fas fa-long-arrow-alt-right"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>  
@endsection

@push('page-js')
<script src="{{asset('js/vendor/mixitup.min.js')}}"></script>
<script src="{{asset('js/custom/mixitup.js')}}"></script>
@endpush