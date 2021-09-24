<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content">
        <a class="navbar-logo" href="{{route('home')}}"
            ><img src="img/logo.png" alt="logo" /></a
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
            <li class="navbar-item navbar-dropdown {{route_is(['portfolio','portfolio-details']) ? 'active': ''}}">
                <a class="navbar-link dropdown-indicator" href="#"
                ><span>portfolio</span><i class="fas fa-plus"></i
                ></a>
                <ul class="dropdown-list">
                <li>
                    <a class="dropdown-link" href="{{route('portfolio')}}"
                    >Portfolio List</a
                    >
                </li>
                <li>
                    <a class="dropdown-link" href="{{route('portfolio-details')}}"
                    >Portfolio Details</a
                    >
                </li>
                </ul>
            </li>
            <li class="navbar-item navbar-dropdown {{route_is(['blog','blog-details']) ? 'active': ''}}">
                <a class="navbar-link dropdown-indicator" href="#"
                ><span>blogs</span><i class="fas fa-plus"></i
                ></a>
                <ul class="dropdown-list">
                <li>
                    <a class="dropdown-link" href="{{route('blog')}}">Blog list</a>
                </li>
                <li>
                    <a class="dropdown-link" href="{{route('blog-details')}}"
                    >blog details</a
                    >
                </li>
                </ul>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="{{route('contact')}}">contact</a>
            </li>
            </ul>
            <div class="navbar-btn">
            <a class="btn btn-inline" href="#"
                ><i class="fas fa-code"></i><span>need to talk?</span></a
            >
            </div>
        </div>
        </div>
    </div>
</nav>