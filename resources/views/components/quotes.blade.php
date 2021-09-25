@props(['quote'=>$quote,'address'=>$address ?? '','name'=>$name ?? 'John Doe','image'=>$image ?? ''])

<div class="testi-card">
    <i class="flaticon-favorites"></i>
    <div class="testi-quote">
      <p>
        {{$quote}}
      </p>
    </div>
    <div class="testi-meta">
      <h5>{{ucwords($name)}}</h5>
      <p>{{$address}}</p>
      <a href="#">
          <img src="{{asset($image)}}" alt="testi-1" />
      </a>
    </div>
  </div>