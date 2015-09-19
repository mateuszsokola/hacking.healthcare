<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    @yield('meta')
    <title>@yield('title')</title>
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic|Raleway:500"
        rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <script type="text/javascript" src="{{url('scripts/jquery-2.1.4.js')}}"></script>
    <script type="text/javascript" src="{{url('scripts/script.js')}}"></script>
    @yield('scripts')
</head>
<body class="@yield('page-name')">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-61755879-1', 'auto');
    ga('send', 'pageview');
</script>
<nav class="global-nav">
    <div class="container">
        <div class="global-nav-header">
            <button
                    type="button"
                    class="menu-toggle"
                    data-toggle="menu-open"
                    data-target="#menu-container"
                    aria-expanded="false"
                    >
                <span class="only-screen-readers">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a
                href="/"
                class="global-logo"
                rel="home"
                >
                hacking.healthcare
            </a>
        </div>

        <div
                class="menu-collapse"
                id="menu-container"
                >
            <ul class="menu-nav">
                <li class="has-dropdown"> <!-- dropdown-open -->
                    <span class="link">Events</span>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/upcoming">Upcoming events</a>
                        </li>
                        <li>
                            <a href="/past">Past events</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/sponsors">Sponsors</a>
                </li>
                <li>
                    <a href="/team">Team</a>
                </li>
            </ul>
        </div> <!-- /.menu-collapse -->
    </div>
</nav>

@yield('content')

<div class="sidebar">
    <div class="container">
        <div class="col">
            <span class="title">Menu</span>

            <ul class="sidebar-nav">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/upcoming">Upcoming events</a>
                </li>
                <li>
                    <a href="/past">Past events</a>
                </li>
                <li>
                    <a href="/team">Team</a>
                </li>
                <li>
                    <a href="/privacy">Privacy Policy</a>
                </li>
                <li>
                    <a href="/imprint">Imprint</a>
                </li>
            </ul>
        </div>
        <div class="col twitter-col">
            <span class="title">Twitter</span>

            <p>great demo: applying NuPIC on disease vector data. - I really love #HackNuPIC Such a great diversity of applications in this #hackathon #ai</p>

            <span class="date">31th of May</span>
        </div>
        <div class="col follow-col">
            <span class="title">Follow us</span>
            <a href="https://www.facebook.com/hacking.healthcare" class="follow-link">
                <span class="icon-facebook"></span>
                <span class="only-screen-readers">Facebook</span>
            </a>
            <a href="https://twitter.com/hackhealthcare" class="follow-link">
                <span class="icon-twitter"></span>
                <span class="only-screen-readers">Twitter</span>
            </a>
        </div>
        <div class="col about-col">
            <span class="title">About</span>
            hacking.healthcare HQ<br>
            1090 Vienna<br>
            Austria<br>
            ZVR: 895857915<br>

            <a href="mailto:office@hacking.healthcare" class="imprint-link">
                Contact / Support
            </a>
        </div>
    </div>
</div>
<div class="footer">
    <p>
        &copy; 2015 Entrepreneurship - Verein zur Förderung der Entwicklung und des unternehmerischen Denkens.
        All rights reserved.
    </p>
    <p>
        Made with
        <span class="icon-heart"></span>
        <span class="only-screen-readers">love</span>
        in Vienna
    </p>
</div>
</body>
</html>