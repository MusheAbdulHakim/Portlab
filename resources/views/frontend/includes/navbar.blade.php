<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content">
        <a class="navbar-logo" href="{{route('home')}}"
            ><img src="{{asset('img/logo.png')}}" alt="logo" /></a
        ><button class="navbar-toggle" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <div class="navbar-slide">
            <a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>
            <ul class="navbar-list">
            <li class="navbar-item {{route_is('home') ? 'active': ''}}">
                <a class="navbar-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="navbar-item {{route_is('services') ? 'active': ''}}">
                <a class="navbar-link" href="{{route('services')}}">services</a>
            </li>
            <li class="navbar-item {{route_is('resume') ? 'active': ''}}">
                <a class="navbar-link" href="{{route('resume')}}">resume</a>
            </li>
            <li class="navbar-item {{route_is(['portfolio','portfolio-details']) ? 'active': ''}}">
                <a class="navbar-link" href="{{route('portfolio')}}">Portfolio</a>
            </li>
            <li class="navbar-item  {{route_is(['blog','article']) ? 'active': ''}}">
                <a class="navbar-link" href="{{route('blog')}}">Blog</a>
            </li>
            <li class="navbar-item {{route_is('contact') ? 'active': ''}}">
                <a class="navbar-link" href="{{route('contact')}}">contact</a>
            </li>
            </ul>
            
        </div>
        </div>
    </div>
</nav>