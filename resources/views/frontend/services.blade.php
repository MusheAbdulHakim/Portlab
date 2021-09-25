@extends('frontend.layout.index')

@push('page-css')
<link rel="stylesheet" href="{{asset('css/custom/service.css')}}" />
@endpush


@section('banner')
<section class="single-banner">
  <div class="single-oly">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-content">
            <h1>My services</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                services
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
<section class="section service-part">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <p>my <span>services</span></p>
          <h2>You can find your professional need service.</h2>
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
          <a class="btn btn-inline" href="#"
            ><i class="far fa-eye"></i><span>show more</span></a
          >
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
          <h2>Find your question before we work together</h2>
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
          <p>clients <span>qoute</span></p>
          <h2>Received fantastic feedback from the clients</h2>
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
  </div>
</section>
@endsection
