@extends ('magazine.layout')

@section('main')

<div class="second">

    @foreach ($category->articles as $article)
        <div class="griditem">
            <div class="img">
                <img src="{{$article->img_url}}">
            </div>
            <div class="text">
                <h2> {{$article->title}} </h2> 
            </div>
            <div class="text">
                <h3> {{$article->lead}} </h3>
            </div>
        </div>
    



    <article>
        <a href="{{ route('show', $article->article_id) }}">
            <img src="{{$article->img_url}}" alt="Archive picture">
            <h1>{{$article->title}}</h1>
            <p>{{$article->lead}}</p>
        </a>
    </article> 

    @endforeach
</div>

@endsection 
