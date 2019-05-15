@extends ('magazine.layout')

@section('main')

@can('superUsers-only')
<a href="{{ url('/editArticle') }}">Skyddad sida</a>
@endcan
<a href="{{ url('magazine.editArticle') }}">AASkyddad sida</a>

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
