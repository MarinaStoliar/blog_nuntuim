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
<header class="header">
    @section('header')
            <a href="#" class="logo"><img src="{{asset('images/logo.svg')}}" alt="Logo"></a>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tags</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <a href="#" class="header_search">
                <svg width="33" height="30" viewBox="0 0 33 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.196 23.75C21.1486 23.75 25.9741 19.2728 25.9741 13.75C25.9741 8.22715 21.1486 3.75 15.196 3.75C9.24347 3.75 4.41797 8.22715 4.41797 13.75C4.41797 19.2728 9.24347 23.75 15.196 23.75Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M28.6682 26.25L22.8076 20.8125" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="#" class="header_call">
                <svg width="33" height="30" viewBox="0 0 33 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.9173 10C24.9173 8.01088 24.0657 6.10322 22.5497 4.6967C21.0338 3.29018 18.9777 2.5 16.8338 2.5C14.6899 2.5 12.6338 3.29018 11.1179 4.6967C9.60192 6.10322 8.75027 8.01088 8.75027 10C8.75027 18.75 4.7085 21.25 4.7085 21.25H28.9591C28.9591 21.25 24.9173 18.75 24.9173 10Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.1644 26.25C18.9276 26.6288 18.5876 26.9433 18.1786 27.1619C17.7695 27.3805 17.3057 27.4956 16.8337 27.4956C16.3616 27.4956 15.8979 27.3805 15.4888 27.1619C15.0798 26.9433 14.7398 26.6288 14.5029 26.25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
    @show
</header>


    @yield('content')
</body>

</html>
