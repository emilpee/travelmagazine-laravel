@extends ('magazine.layout')

@section('main')

@can('superuser-only')
<a href="{{ url('/listEditArticle') }}">Skyddad sida</a>
@endcan

    <div class="container">
        <Header></Header>
        <ul class="list-group">
            @foreach ($articles as $article)
            <li class="list-group-item"> {{$article->title}} </li>
            @csrf          
            @endforeach
        </ul>



    </div>
@endsection
