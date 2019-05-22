@extends ('magazine.layout')

@section('main')
 
 @can('superUsers-only')
    <a href="{{ route('edit', $article->article_id) }}">Edit</a>
@endcan
    <div>
        <img src="{{$article->img_url}}" alt="Archive picture">
        <h1 class="jumbotron">{{$article->title}}</h1>
        <h3>{{$article->lead}}</h3>
        @auth

        <p>{{$article->bodytext}}</p>
        <strong>{{$article->author}}</strong>
    </div>
@endauth


<!-- Show only if you are not logged in at the bottom of the page -->
@if (Route::has('login'))
    <div class="lock">
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