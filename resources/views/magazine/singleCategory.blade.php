@extends ('magazine.layout')

@section('main')

<section class="sgrid">

    <div class="secondimg" style="background-image: url({{$category->img_url}});">
        <div class="pigbox">
            <h1>{{$category->name}}</h1>
        </div>    
    </div>

<div class="second">
    @foreach ($articles as $article)
    <article class="griditem">
        <a href="{{ route('show', $article->article_id) }}">
            <section class="img">
                <img src="{{$article->img_url}}" alt="Archive picture">
            </section>
            <section class="text1">
                <h2> {{$article->title}} </h2> 
            </section>
            <section class="text2">
                <h3> {{$article->lead}} </h3>
            </section> 
        </a>
    </article>
    @endforeach
</div>

<div class="links">
    {{ $articles->links() }}
</div>

<div class="ad"></div>



</section>



@endsection 
