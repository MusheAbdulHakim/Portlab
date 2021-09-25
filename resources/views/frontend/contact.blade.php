@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/contact.css')}}" />
@endpush

@section('banner')
<section class="single-banner">
    <div class="single-oly">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-content">
              <h1>Contact</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
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
<section class="section contact-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>contact <span>me</span></p>
            <h2>I'm always open to discussion time spand</h2>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-4 col-lg-4">
          <div class="contact-address">
            <div class="address-icon"><i class="flaticon-telephone"></i></div>
            <div class="address-text">
              <h4>phone</h4>
              <p>(+880) 1838288389 <span>(+880) 1941101915</span></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="contact-address">
            <div class="address-icon"><i class="flaticon-mail"></i></div>
            <div class="address-text">
              <h4>email</h4>
              <p>
                mironcoder@gmail.com <span>mironbonny1994@gmail.com</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="contact-address">
            <div class="address-icon"><i class="flaticon-pin"></i></div>
            <div class="address-text">
              <h4>location</h4>
              <p>1420 East Delpara <span>Narayanganj, Bangladesh</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-7">
          @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> {{$error}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endforeach  
          @endif
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <form method="post" enctype="multipart/form-data" action="{{route('contact')}}">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name"
                    type="text"
                    class="form-control"
                    placeholder="Your Name"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="email"
                    type="email"
                    class="form-control"
                    placeholder="Your Email"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="subject"
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="file" name="file" class="form-control" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="message"
                    class="form-control"
                    placeholder="Message"
                  ></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-btn">
                  <button class="btn btn-inline" type="submit">
                    <i class="fas fa-paper-plane"></i
                    ><span>send message</span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="contact-img">
            <img src="{{asset('img/contact.png')}}" alt="contact" />
          </div>
        </div>
      </div>
    </div>
</section>   
@endsection

@push('page-js')
    
@endpush