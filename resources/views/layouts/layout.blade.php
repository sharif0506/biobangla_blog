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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href=""><img class="biobangla_logo" src="{{asset('images/biobanglalogo1.jpg')}}"  style="height:25px; width:70px"></a>
                <a class="navbar-brand" href=""><b>Bio Bangla</b></a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home"><b class="navbarList">Home</b></a></li>
                        <li><a href="#events"><b class="navbarList">Upcoming Events</b></a></li>
                        <li><a href="#projects"><b class="navbarList">Projects</b></a></li>
                        <li><a href="#partnarship"><b class="navbarList">Partnarship</b></a></li>
                        <li><a href="#about"><b class="navbarList"> About</b></a></li>
                        <li><a href="#team"><b class="navbarList">Team</b></a></li>
                        <li><a href="#contact"><b class="navbarList">Contact</b></a></li>
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

