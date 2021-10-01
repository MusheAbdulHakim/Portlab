<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Mironcoder" />
    <meta name="email" content="mironcoder@gmail.com" />
    <meta name="profile" content="https://themeforest.net/user/mironcoder" />
    <meta name="name" content="Portlab" />
    <meta name="type" content="Personal Portfolio" />
    <meta
      name="title"
      content="Portlab - Personal Portfolio Bootstrap HTML Template"
    />
    <meta
      name="keywords"
      content="portlab, portfolio, personal, html, template, bootstrap, bussiness, clean, creative, resume, cv, designer, responsive, minimal, freelancer"
    />
    <title>{{ucfirst(config('app.name'))}} - {{ucfirst($title)}}</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('font/flaticon/index/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('font/flaticon/portfolio/flaticon.css')}}" />

    <link
      rel="stylesheet"
      href="{{asset('css/vendor/all.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom/main.css')}}" />
    @stack('page-css')
  </head>
  <body>
    <a class="back2top-btn" href="#"
      ><i class="fas fa-long-arrow-alt-up"></i
    ></a>
    <!-- navbar section -->
    @include('frontend.includes.navbar')
    <!-- /navbar section -->
    <!-- banner -->
    @hasSection ('banner')
      @yield('banner')
    @else
    <section class="banner-part">
      <div class="banner-bg">
        <div class="container">
          <img
            class="circle-shape"
            src="{{asset('img/circle-shape.png')}}"
            alt="circle-shape"
          /><img class="star-shape" src="{{asset('img/star-shape.png')}}" alt="star-shape" />
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="banner-img">
                <img src="{{asset('img/banner-hero.png')}}" alt="banner-hero" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="banner-content">
                <ul class="banner-icon">
                  
                  @foreach ($user->getSocialAccounts($user->social_account) as $account)
                    <li>
                      <a class="icon icon-inline" target="_blank" href="{{$account->url}}"
                        ><i class="{{$account->icon}}"></i
                      ></a>
                    </li>
                  @endforeach
                  
                </ul>
                <div class="banner-text">
                  <span>Welcome dear!</span>
                  <h1>In my own hand-crafted frontend development world.</h1>
                  <p>
                    Helping design your business and personal website build with
                    your demand by html and wordpress. Click the demo work
                    button, you can see my previous project.
                  </p>
                </div>
                <div class="banner-btn duel-btn">
                  <a class="btn btn-inline" href="#about-section"
                    ><i class="fas fa-arrows-alt"></i><span>know more</span></a
                  ><a class="btn btn-inline" href="{{route('portfolio')}}"
                    ><i class="fas fa-boxes"></i><span>demo work</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- /banner -->
    <!-- main content -->
    @yield('content')
    <!-- / main content -->
    <!-- footer section -->
    @include('frontend.includes.footer')
    <!-- /footer section -->
</body>
<script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/vendor/slick.min.js')}}"></script>
<script src="{{asset('js/custom/slick.js')}}"></script>
@stack('page-js')
<script src="{{asset('js/custom/main.js')}}"></script>
</html>
