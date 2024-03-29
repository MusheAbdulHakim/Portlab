@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/index.css')}}" />  
@endpush


@section('content')
 <section class="section resume-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>resume</span></p>
            <h2>Some basic information about myself</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="resume-cate-btn">
            <li>
              <button class="cate-btn active" onclick="filter('about-part')">
                <i class="fas fa-user"></i><span>about me</span>
              </button>
            </li>
            <li>
              <button class="cate-btn" onclick="filter('exper-part')">
                <i class="fas fa-user-tie"></i><span>experience</span>
              </button>
            </li>
            <li>
              <button class="cate-btn" onclick="filter('edu-part')">
                <i class="fas fa-user-graduate"></i><span>education</span>
              </button>
            </li>
            <li>
              <button class="cate-btn" onclick="filter('refer-part')">
                <i class="fas fa-users"></i><span>reference</span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="about-section" class="section about-part cate-active">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="about-summery">
            <h3>{{$user->name}}</h3>
            <p>
              {{$user->about}}
            </p>
          </div>
          <div class="about-list">
            <ul>
              <li>
                <h6>Birthday:</h6>
                <p>{{date_format(date_create($user->birthday),'d M Y')}}</p>
              </li>
              <li>
                <h6>Lives in:</h6>
                <p>{{$user->address}}</p>
              </li>
              
            </ul>
            <ul>
              <li>
                <h6>Phone:</h6>
                <p>{{$user->phone}}</p>
              </li>                        
            </ul>
          </div>
          <div class="about-btn duel-btn">
            <a class="btn btn-inline" href="{{!empty($user->cv) ? asset($user->cv) : '#'}}" {{!empty($user->cv) ? 'download' : ''}}
              ><i class="fas fa-download"></i><span>Download CV</span></a
            ><a class="btn btn-inline" href="{{route('contact')}}"
              ><i class="fas fa-headset"></i><span>contact me</span></a
            >
          </div>
        </div>
        <div class="col-lg-5">
          <div class="about-img"><img src="{{asset('img/about.png')}}" alt="about" /></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section exper-part cate-active">
    <div class="container">
      <div class="row">
        @if (!empty($resume))
        @foreach ($resume->experiences as $experience)
        <div class="col-md-6 col-lg-6">
          <x-experience :experience="$experience" />
        </div>
        @endforeach 
        @endif
      </div>
    </div>
  </section>
  <section class="section edu-part cate-active">
    <div class="container">
      <div class="row">
        @if (!empty($resume))
        @foreach ($resume->qualifications as $qualification)
        <div class="col-md-6 col-lg-6">
          <x-qualification :qualification="$qualification" />
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <section class="section refer-part cate-active">
    <div class="container">
      <div class="row">
        @foreach ($references as $reference)
        <div class="col-lg-6">
          <x-reference :reference="$reference" />
        </div>
        @endforeach    
      </div>
    </div>
  </section>
  <section class="section service-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>services</span></p>
            <h2>I'm very passionate under about this services</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="col-md-6 col-lg-4">
          <x-service :service="$service" />
        </div>
        @endforeach  
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="service-btn">
            <a class="btn btn-inline" href="{{route('services')}}"
              ><i class="far fa-eye"></i><span>show more</span></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section coding-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>coding <span>structure</span></p>
            <h2>How do I organize of my coding structure</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="coding-content">
            <h3>
              Build your SAAS landing page using the
              <span>intelligent BEM interface</span>
            </h3>
            <p>
              Blocks, Elements and Modifiers. A smart HTML/CSS structure that
              can easely be reused. Layout driven by the purpose of
              modularity.
            </p>
          </div>
          <ul class="coding-list">
            <li>
              <span class="coding-round"></span>
              <p>Simple and Smart HTML code structure</p>
            </li>
            <li>
              <span class="coding-round"></span>
              <p>Works reintegrated in any part of the layout</p>
            </li>
            <li>
              <span class="coding-round"></span>
              <p>Reuse the elements from one design to another</p>
            </li>
            <li>
              <span class="coding-round"></span>
              <p>Looks good on all devices Responsive code</p>
            </li>
            <li>
              <span class="coding-round"></span>
              <p>Meaningful comment in each section</p>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="coding-img">
            <img src="img/coding.jpg" alt="coding" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section port-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>portfolio</span></p>
            <h2>Take a look some of my featured projects</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="port-slider">
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
            <div class="port-card">
              <div class="port-img">
                <img src="img/port-2.jpg" alt="port-2" />
              </div>
              <div class="port-oly">
                <div class="port-btn">
                  <a class="btn btn-inline" href="#">live preview</a
                  ><a class="btn btn-inline" href="#">view details</a>
                </div>
                <div class="port-text"><h6>App landing page</h6></div>
              </div>
            </div>
            <div class="port-card">
              <div class="port-img">
                <img src="img/port-3.jpg" alt="port-3" />
              </div>
              <div class="port-oly">
                <div class="port-btn">
                  <a class="btn btn-inline" href="#">live preview</a
                  ><a class="btn btn-inline" href="#">view details</a>
                </div>
                <div class="port-text"><h6>Job marketplace</h6></div>
              </div>
            </div>
            <div class="port-card">
              <div class="port-img">
                <img src="img/port-4.jpg" alt="port-4" />
              </div>
              <div class="port-oly">
                <div class="port-btn">
                  <a class="btn btn-inline" href="#">live preview</a
                  ><a class="btn btn-inline" href="#">view details</a>
                </div>
                <div class="port-text"><h6>creative agency</h6></div>
              </div>
            </div>
            <div class="port-card">
              <div class="port-img">
                <img src="img/port-5.jpg" alt="port-5" />
              </div>
              <div class="port-oly">
                <div class="port-btn">
                  <a class="btn btn-inline" href="#">live preview</a
                  ><a class="btn btn-inline" href="#">view details</a>
                </div>
                <div class="port-text"><h6>FM radio station</h6></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="port-show-btn">
            <a class="btn btn-inline" href="#"
              ><i class="far fa-eye"></i><span>show more</span></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section skills-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>skills</span></p>
            <h2>Expert in this technical web software</h2>
          </div>
        </div>
      </div>
      <div class="row skills-parent">
        @if(!empty($resume->technologies))
        @foreach($resume->technologies as $tech)
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="{{asset($tech['avatar'])}}" alt="{{$tech['name']}}" />
            </div>
            <div class="skills-name"><p>{{$tech['name']}}</p></div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <section class="discuss-part">
    <div class="container">
      <div class="discuss-oly">
        <div class="row discuss-bg">
          <div class="col-md-7 col-lg-8">
            <div class="discuss-content">
              <h3>Let’s discuss your idea</h3>
              <p>
                Have a thought about your future website? I am always here.
              </p>
            </div>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="discuss-btn">
              <a class="btn btn-inline" href="{{route('contact')}}"
                ><i class="fas fa-paper-plane"></i
                ><span>Get in Touch</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="counter-part">
    <div class="counter-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4">
            <div class="counter-card count-1">
              <i class="flaticon-project-management"></i>
              <div class="counter-info">
                <h3><span class="counter-number">122</span>+</h3>
                <p>Project completed</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="counter-card count-2">
              <i class="flaticon-handshake"></i>
              <div class="counter-info">
                <h3><span class="counter-number">108</span>+</h3>
                <p>Satisfied Clients</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="counter-card count-3">
              <i class="flaticon-rating"></i>
              <div class="counter-info">
                <h3><span class="counter-number">98</span>%</h3>
                <p>Possitive Feedback</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section pricing-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>pricing <span>plan</span></p>
            <h2>Pricing plan will be change by discussion</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($pricings as $pricing)
        <div class="col-md-6 col-lg-4">
            <x-pricing :category="$pricing->category" :price="$pricing->cost" :elements="$pricing->elements" />
          </div>
        @endforeach
        
      </div>
    </div>
  </section>
  <section class="section faq-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>faq <span>question</span></p>
            <p>See if your question have been answered already before you ask.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($faqs as $faq)
        <div class="col-md-6 col-lg-6">
          <x-faqs :question="$faq->question" :answer="$faq->answer" />
        </div>
        @endforeach        
      </div>
    </div>
  </section>
  <section class="section testi-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>clients <span>qoutes</span></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testi-slider">
            @foreach ($quotes as $quote)
                <x-quotes :name="$quote->name" :address="$quote->address" :quote="$quote->quote" :image="$quote->image" />
            @endforeach
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testi-btn">
            <a class="btn btn-inline" href="#"
              ><i class="fas fa-tint"></i><span>drop your quote</span></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section blog-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>Latest <span>Articles</span></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="img/blog-1.jpg" alt="blog-1" />
              <div class="blog-oly"><p>html, css</p></div>
            </div>
            <div class="blog-content">
              <ul class="blog-meta">
                <li>
                  <i class="flaticon-calendar"></i>
                  <p>02 feb 2020</p>
                </li>
                <li>
                  <i class="flaticon-share"></i>
                  <p>5 share</p>
                </li>
              </ul>
              <div class="blog-text">
                <h4>
                  <a href="#"
                    >Business contents insurance iure ipsam ratione is a type
                    of business...</a
                  >
                </h4>
              </div>
              <ul class="blog-link">
                <li><a class="btn btn-inline" href="#">read more</a></li>
                <li>
                  <i class="flaticon-chat"></i>
                  <p>13 comments</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="img/blog-2.jpg" alt="blog-2" />
              <div class="blog-oly"><p>javascript</p></div>
            </div>
            <div class="blog-content">
              <ul class="blog-meta">
                <li>
                  <i class="flaticon-calendar"></i>
                  <p>02 feb 2020</p>
                </li>
                <li>
                  <i class="flaticon-share"></i>
                  <p>5 share</p>
                </li>
              </ul>
              <div class="blog-text">
                <h4>
                  <a href="#"
                    >Business contents insurance iure ipsam ratione is a type
                    of business...</a
                  >
                </h4>
              </div>
              <ul class="blog-link">
                <li><a class="btn btn-inline" href="#">read more</a></li>
                <li>
                  <i class="flaticon-chat"></i>
                  <p>13 comments</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="img/blog-3.jpg" alt="blog-2" />
              <div class="blog-oly"><p>javascript</p></div>
            </div>
            <div class="blog-content">
              <ul class="blog-meta">
                <li>
                  <i class="flaticon-calendar"></i>
                  <p>02 feb 2020</p>
                </li>
                <li>
                  <i class="flaticon-share"></i>
                  <p>5 share</p>
                </li>
              </ul>
              <div class="blog-text">
                <h4>
                  <a href="#"
                    >Business contents insurance iure ipsam ratione is a type
                    of business...</a
                  >
                </h4>
              </div>
              <ul class="blog-link">
                <li><a class="btn btn-inline" href="#">read more</a></li>
                <li>
                  <i class="flaticon-chat"></i>
                  <p>13 comments</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-btn">
            <a class="btn btn-inline" href="{{route('blog')}}"
              ><i class="far fa-eye"></i><span>show more</span></a
            >
          </div>
        </div>
      </div>
    </div>
  </section>
   
@endsection


@push('page-js')

<script src="{{asset('js/vendor/counterup.min.js')}}"></script>
<script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('js/custom/counterup.js')}}"></script>
@endpush