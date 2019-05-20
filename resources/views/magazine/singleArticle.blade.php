@extends ('magazine.layout')

@section('main')
 
 @can('superUsers-only')
    <a href="{{ url('/edit') }}">Edit</a>
@endcan
    <div>
        <h1 class="jumbotron">{{$article->title}}</h1>
        <h3>{{$article->lead}}</h3>
        @auth

        <p>{{$article->bodytext}}</p>
        <img alt="Artikelbild" src={{$article->img_url}} />
    </div>
@endauth


<!-- Show only if you are not logged in at the bottom of the page -->
@if (Route::has('login'))
    <div class="login-btn">
        @auth 
            
        @else
            <span>Want to read more? Then please either </span>
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <span>or if you don't have an account, please </span>
                <a href="{{ route('register') }}">Register</a>.
            @endif

        @endauth
    </div>
@endif

@endsection