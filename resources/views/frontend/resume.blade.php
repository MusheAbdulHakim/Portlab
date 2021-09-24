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
        <div class="col-lg-12">
          <div class="section-heading">
            <p>about <span>myself</span></p>
            <h2>Some basic information about myself</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="about-summery">
            <h3>I'm Mahmudul hasan (miron)</h3>
            <p>
              I’m with broad technical skill-set, very strong attention to
              detail, and 3 years of experience in front-end web development.
              Able to multitask and juggle multiple pressing projects
              simultaneously. On top of the latest trends and technologies.
              Ability to improvise, troubleshoot, take ownership, and most
              importantly learn new skills on the job.
            </p>
          </div>
          <div class="about-list">
            <ul>
              <li>
                <h6>Birthday:</h6>
                <p>02 Februray 1995</p>
              </li>
              <li>
                <h6>Lives in:</h6>
                <p>Narayanganj, Bangladesh</p>
              </li>
              <li>
                <h6>Website:</h6>
                <p>www.mironmahmud.com</p>
              </li>
            </ul>
            <ul>
              <li>
                <h6>Phone:</h6>
                <p>(+880) 1838288389</p>
              </li>
              <li>
                <h6>Skype:</h6>
                <p>live:mironhasan018</p>
              </li>
              <li>
                <h6>Linkedin:</h6>
                <p>/mironmahmud</p>
              </li>
            </ul>
          </div>
          <div class="about-btn duel-btn">
            <a class="btn btn-inline" href="#"
              ><i class="fas fa-download"></i><span>Download CV</span></a
            ><a class="btn btn-inline" href="#"
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
            <p>my <span>experience</span></p>
            <h2>Something about my work experience</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-medal"></span>
            <h4>Feb 2016 - Dec 2017</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Frontend Developer</h5>
                <h6>Creative-It Institute</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-medal"></span>
            <h4>Feb 2017 - Dec 2018</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Frontend Developer</h5>
                <h6>Ingenious-hub Team</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-medal"></span>
            <h4>Feb 2018 - Dec 2019</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Frontend Developer</h5>
                <h6>Icon-Infotech Limited</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-medal"></span>
            <h4>Feb 2019 - Dec 2020</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Frontend Developer</h5>
                <h6>Xpeedstudio</h6>
              </li>
            </ul>
          </div>
        </div>
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
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-graduation-cap"></span>
            <h4>apr 2017 - Running</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>B.S.S Honourse at Economics</h5>
                <h6>Government Tolaram college, Narayanganj</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-graduation-cap"></span>
            <h4>jan 2015 - feb 2017</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Alim / H.S.C - GPA :4.57</h5>
                <h6>Government Madrasha-E Alia, Dhaka</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-graduation-cap"></span>
            <h4>jan 2013 - dec 2015</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>Dakhil / S.S.C - GPA :450</h5>
                <h6>Islami Mission Kamil Madrasha</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="resume-card">
            <span class="flaticon-graduation-cap"></span>
            <h4>jan 2011 - dec 2013</h4>
            <ul>
              <li><i class="flaticon-deadline"></i></li>
              <li>
                <h5>J.D.C / J.S.C - GPA :467</h5>
                <h6>Badarpur Senior Alim Madrasha</h6>
              </li>
            </ul>
          </div>
        </div>
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
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/html.png" alt="html" />
            </div>
            <div class="skills-name"><p>html</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img"><img src="img/css.png" alt="css" /></div>
            <div class="skills-name"><p>css</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/javascript.png" alt="javascript" />
            </div>
            <div class="skills-name"><p>javascript</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/bootstrap.png" alt="bootstrap" />
            </div>
            <div class="skills-name"><p>bootstrap</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/jquery.png" alt="jquery" />
            </div>
            <div class="skills-name"><p>jquery</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/sass.png" alt="sass" />
            </div>
            <div class="skills-name"><p>sass</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/wordpress.png" alt="wordpress" />
            </div>
            <div class="skills-name"><p>wordpress</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/react.png" alt="react" />
            </div>
            <div class="skills-name"><p>react</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/github.png" alt="github" />
            </div>
            <div class="skills-name"><p>github</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/vscode.png" alt="vscode" />
            </div>
            <div class="skills-name"><p>vscode</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/photoshop.png" alt="photoshop" />
            </div>
            <div class="skills-name"><p>photoshop</p></div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="skills-card">
            <div class="skills-img">
              <img src="img/illustrator.png" alt="illustrator" />
            </div>
            <div class="skills-name"><p>illustrator</p></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
@endsection

@push('page-js')
<script src="{{asset('js/vendor/counterup.min.js')}}"></script>
<script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('js/custom/counterup.js')}}"></script>
@endpush