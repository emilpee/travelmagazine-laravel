<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image">
    
    <title>GO!</title>
</head>
<body class="container">
<div id="app">
    <div class="navbar">

        <div class="nav-btn">
            <a href="{{ url('/') }}" class="logo">GO!</a>
                      
            <a href="{{ url('/categories') }}">Categories</a>
            @yield('navbar')
        </div>

            @if (Route::has('login'))
                <div class="login-btn">
                    @auth 
                    <a href="{{ route('home') }}">Dashboard</a>
    
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                
                                                
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif

                    @endauth
                </div>
            @endif
        </div>
@yield('main')

<router-view name="MagazineFooter"></router-view>
</div>
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
