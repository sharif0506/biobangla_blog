<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" >
                    <img style="max-width:60px; margin-top: -24px;" src="{{asset('images/biobangla-logo.jpg')}}" />
                </a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('events') }}">Events</a></li>
                        <!--<li><a href="{{ url('projects') }}">Projects</a></li>-->
                        <li><a href="{{ url('partnarship') }}">Partnarship</a></li>
                        <li><a href="{{ url('about') }}"> About</a></li>
                        <li><a href="{{ url('team') }}">Team</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        <li><b class="navbarList"></b></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <br /> <br /> 

    <div class="container">
        @yield('content') 
    </div>

    <footer class="container-fluid text-center navbar-fixed-bottom" style="background-color: whitesmoke">
        <div style="margin-top:25px;">
            <p>
                BioBangla © 2018, All Rights Reserved
            </p>                           
        </div>
    </footer>    

</body>

</html>

