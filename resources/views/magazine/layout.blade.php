<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title>Articles</title>
    
</head>
<body class="container">
<div id="app">

    <router-view name="MagazineHeader"></router-view>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <!-- Edit ska bara gå att komma åt som admin-->
                        <a href="{{ url('/editArticle') }}">Edit</a>
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif

                    @endauth
                </div>
            @endif
@yield('main')
<router-view name="MagazineFooter"></router-view>
</div>
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
