<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{mix('css/main.css')}}" rel="stylesheet">
</head>

<body>
<div class="content_app">
    <header class="header">
        @section('header')
            <a href="{{route('home')}}" class="logo"><img src="{{asset('images/logo.svg')}}" alt="Logo"></a>
            <ul class="menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('tags')}}">Tags</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
            <a href="{{route('home')}}" class="header_search">
                <img src="{{asset('images/search.svg')}}" alt="">
            </a>
            <a href="{{route('home')}}" class="header_call">
                <img src="{{asset('images/call.svg')}}" alt="">
            </a>

        @show
    </header>

    @yield('content')
</div>
</body>

</html>
