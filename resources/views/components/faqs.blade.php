@props(['question'=>$question,'answer'=>$answer])

<div class="faq-parent">
    <div class="faq-child">
      <div class="faq-que">
        <button>{{$question}}</button>
      </div>
      <div class="faq-ans">
        <p>
          {{$answer}}
        </p>
      </div>
    </div>
    
  </div>