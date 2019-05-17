@extends ('magazine.layout')

@section('main')
 
 @can('superUsers-only')
    <a href="{{ url('/edit') }}">Edit</a>
@endcan

    <div>
        <h1 class="jumbotron">{{$article->title}}</h1>
        <h3>{{$article->lead}}</h3>
        <p>{{$article->bodytext}}</p>
        <img alt="Artikelbild" src={{$article->img_url}} />
    </div>

@endsection
