@props(['experience'=>$experience ?? ''])

<div class="resume-card">
    <span class="flaticon-medal"></span>
    <h4>{{date_format(date_create($experience['start_date']),'M Y'). '-' . date_format(date_create($experience['end_date']),"M Y")}}</h4>
    <ul>
      <li><i class="flaticon-deadline"></i></li>
      <li>
        <h5>{{$experience['designation']}}</h5>
        <h6>{{$experience['company']}}</h6>
      </li>
    </ul>
</div>