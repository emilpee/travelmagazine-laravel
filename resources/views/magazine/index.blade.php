@extends ('magazine.layout')

@section('main')

    <div class="container">

        <ul class="list-group">
            @foreach ($articles as $article)
            <a href="{{ route('show', $article->article_id) }}" class="list-group-item"> {{$article->title}} </a>
            @csrf          
            @endforeach
        </ul>



    </div>
@endsection
