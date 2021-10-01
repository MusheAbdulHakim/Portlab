@props(['reference'=>$reference])
<div class="refer-card">
    <div class="refer-img">
      <img src="{{asset($reference->avatar)}}" alt="{{$reference->name}}" />
    </div>
    <div class="refer-content">
      <h4>{{$reference->name}}</h4>
      <p>
        {{$reference->designation}} <span>at {{$reference->company}}</span>
      </p>
      <ul class="refer-contact">
        <li>
          <a title="{{$reference->phone}}" class="icon icon-inline" href="{{$reference->phone}}"
            ><i class="fas fa-phone-alt"></i
          ></a>
          
        </li>
        <li>
          <a class="icon icon-inline" title="{{$reference->email}}" href="{{$reference->email}}"
            ><i class="fas fa-envelope"></i
          ></a>
        </li>
      </ul>
    </div>
</div>