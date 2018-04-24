<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <!--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" >
                    <img style="max-width:75px; margin-top: -12px;" src="{{asset('images/biobanglalogo1.jpg')}}" />
                </a>
             
                <a class="navbar-brand" href="{{ url('/') }}"><b>BIO BANGLA</b></a>
                <!-- <a class="navbar-left"  href="{{ url('/') }}"><img  src="{{asset('images/biobanglalogo1.jpg')}}"  style="max-height:45px; max-width:75px" /></a> -->
                </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}"><b class="navbarList">Home</b></a></li>
                        <li><a href="{{ url('/events') }}"><b class="navbarList">Upcoming Events</b></a></li>
                        <li><a href="{{ url('/projects') }}"><b class="navbarList">Projects</b></a></li>
                        <li><a href="{{ url('/partnarship') }}"><b class="navbarList">Partnarship</b></a></li>
                        <li><a href="{{ url('/about') }}"><b class="navbarList"> About</b></a></li>
                        <li><a href="{{ url('/team') }}"><b class="navbarList">Team</b></a></li>
                        <li><a href="{{ url('/blog') }}"><b class="navbarList">Blog</b></a></li>
                        <li><a href="{{ url('/contact') }}"><b class="navbarList">Contact</b></a></li>
                        <li><b class="navbarList"></b></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="container">
        <div>
            <h3 align='center' >BioBangla Blog </h3>
            <hr />
        </div>
        @yield('content') 
    </div>

</body>

</html>

