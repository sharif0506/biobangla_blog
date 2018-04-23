<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div>
            <h3 align='center' >BioBangla Blog </h3>
            <hr />
        </div>
        @yield('content') 
    </div>

</body>

</html>

