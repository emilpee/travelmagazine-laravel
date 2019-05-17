<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title>Taravel</title>
</head>
<body class="container">
<div id="app">
    <div class="navbar">

        <div class="nav-btn">
            <!-- icon -->
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/categories') }}">Categories</a>
        </div>

            @if (Route::has('login'))
                <div class="login-btn">
                    @auth 
                                                
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