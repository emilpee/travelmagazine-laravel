@extends ('magazine.layout')

@section('main')
 
    <div class="singleArticle">
        <div class="single">
        <img src="{{$article->img_url}}" alt="Archive picture">
        <h1 class="jumbotron">{{$article->title}}</h1>
        <h3>{{$article->lead}}</h3>
        @auth

        <p>{{$article->bodytext}}</p>
        <img src="https://picsum.photos/400/250" class="randompic" alt="Archive picture">
        <p>{{$article->bodytext}}</p>
        
        <div class="byline">
            <strong>{{$article->author}}</strong>
            <small>Last updated: {{$article->updated_at}}</small>
        </div>
        
        @can('superUsers-only')
        <a class="editLink" href="{{ route('edit', $article->article_id) }}">Edit</a>
        @endcan
    </div>
@endauth


<!-- Show only if you are not logged in at the bottom of the page -->
@if (Route::has('login'))
    <div class="lock">
        @auth 
            
        @else
        <img src="../resources/img/lock.png" alt="Login please">
            <span>Want to read more?</span>
            <a href="{{ route('login') }}">Login</a>
        @if (Route::has('register'))
            <span> or if you don't have an account, please </span>
            <a href="{{ route('register') }}">Register</a>
        @endif

        @endauth
    </div>
    
@endif

    <div class="big">
            
    </div>
    </div>

@endsection