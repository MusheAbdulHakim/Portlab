@props(['category'=>$category,'price'=>$price,'elements'=>$elements,])

<div class="pricing-card {{(ucwords($category)== 'Standard') ? 'pricing-recom' : ''}}">
    <div class="pricing-money">
      <h3>{{$category}}</h3>
      <h4>{{$price}}</h4>
      <p>per project</p>
    </div>
    <ul class="pricing-list">
      @foreach ($elements as $element)
      <li>{{$element['element']}}</li>
      @endforeach
    </ul>
    <div class="pricing-btn">
      <a class="btn btn-inline" href="{{route('contact')}}"
        ><i class="fas fa-paper-plane"></i
        ><span>Purchase plan</span></a
      >
    </div>
  </div>


