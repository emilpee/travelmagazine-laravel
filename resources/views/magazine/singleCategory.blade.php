@extends ('magazine.layout')

@section('main')

@foreach ($category->articles as $article)
<div>


    <article>
        <a href="{{ route('show', $article->article_id) }}">
            <img src="{{$article->img_url}}" alt="Archive picture">
            <h1>{{$article->title}}</h1>
            <p>{{$article->lead}}</p>
        </a>
    </article> 


</div>
@endforeach
@endsection 
