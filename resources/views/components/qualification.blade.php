@props(['qualification' => $qualification])

<div class="resume-card">
    <span class="flaticon-graduation-cap"></span>
    <h4>{{date_format(date_create($qualification['start_date']),'M Y'). '-' . date_format(date_create($qualification['end_date']),"M Y")}}</h4>
    <ul>
      <li><i class="flaticon-deadline"></i></li>
      <li>
        <h5>{{$qualification['certificate']}}</h5>
        <h6>{{$qualification['institution']}}</h6>
      </li>
    </ul>
</div>