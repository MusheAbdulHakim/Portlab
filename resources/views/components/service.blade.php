@props(['service'=>$service])

<div class="service-card {{($service->gshape) ? 'service-ghape': ''}}">
    <h3>{{$service->coun}}</h3>
    <span class="{{$service->icon ?? ''}}"></span
    ><i class="{{$service->icon ?? ''}}"></i>
    <h4>{{$service->title}}</h4>
    <p>
      {{$service->description}}
    </p>
</div>