@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/resume.css')}}" />
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>My Resume</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  resume
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
  <section class="section about-part">
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
          <div class="about-img"><img src="img/about.png" alt="about" /></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section exper-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>work experience</span></p>
            <h2>Something about my work experience</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @if (!empty($resume->experiences))
        @foreach ($resume->experiences as $experience)
        <div class="col-md-6 col-lg-6">
          <x-experience :experience="$experience" />
        </div>
        @endforeach
        @endif        
      </div>
    </div>
  </section>
  <section class="section edu-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>qualification</span></p>
            <h2>Something about my qualification</h2>
          </div>
        </div>
      </div>
      <div class="row">
      @if (!empty($resume->qualifications))
      @foreach ($resume->qualifications as $qualification)
      <div class="col-md-6 col-lg-6">
        <x-qualification :qualification="$qualification" />
      </div>
      @endforeach
      @endif        
      </div>
    </div>
  </section>
  <section class="section refer-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>my <span>reference</span></p>
            <h2>Few referal persons information</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="refer-card">
            <div class="refer-img">
              <img src="img/refer-1.jpg" alt="refer-1" />
            </div>
            <div class="refer-content">
              <h4>Maccelam Bond</h4>
              <p>
                Sr. Ux / Ui Designer <span>at Creative It Institute</span>
              </p>
              <ul class="refer-contact">
                <li>
                  <a class="icon icon-inline" href="#"
                    ><i class="fas fa-phone-alt"></i
                  ></a>
                </li>
                <li>
                  <a class="icon icon-inline" href="#"
                    ><i class="fas fa-envelope"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="refer-card">
            <div class="refer-img">
              <img src="img/refer-2.jpg" alt="refer-2" />
            </div>
            <div class="refer-content">
              <h4>Lady Watsona</h4>
              <p>Deputy Manager <span>at Icon Infotech LTD</span></p>
              <ul class="refer-contact">
                <li>
                  <a class="icon icon-inline" href="#"
                    ><i class="fas fa-phone-alt"></i
                  ></a>
                </li>
                <li>
                  <a class="icon icon-inline" href="#"
                    ><i class="fas fa-envelope"></i
                  ></a>
                </li>
              </ul>
            </div>
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
@endsection

@push('page-js')
<script src="{{asset('js/vendor/counterup.min.js')}}"></script>
<script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('js/custom/counterup.js')}}"></script>
@endpush