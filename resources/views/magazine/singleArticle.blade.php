@extends ('magazine.layout')

@section('main')

    <div class="content">
        <h1>{{$article->title}}</h1>
        <h3>{{$article->lead}}</h3>
        <p>{{$article->bodytext}}</p>
        <img alt="Artikelbild" src={{$article->img_url}} />
    </div>

@endsection
