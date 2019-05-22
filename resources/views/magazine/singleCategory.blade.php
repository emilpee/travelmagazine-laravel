@extends ('magazine.layout')

@section('main')

<div class="second">

    @foreach ($category->articles as $article)
    
    <a href="{{ route('show', $article->article_id) }}">
        <article class="griditem">
            
                <section class="img">
                    <img src="{{$article->img_url}}" alt="Archive picture">
                </section>
                <section class="text">
                    <h2> {{$article->title}} </h2> 
                </section>
                <section class="text">
                    <h3> {{$article->lead}} </h3>
                </section>
            
        </article>
    </a>
   

    @endforeach
</div>

@endsection 
