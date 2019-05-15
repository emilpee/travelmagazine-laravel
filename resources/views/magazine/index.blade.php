@extends ('magazine.layout')

@section('main')

    <div class="container">
        <ul class="list-group">
            @foreach ($articles as $article)
            <li class="list-group-item"> {{$article->title}} </li>
            @csrf          
            @endforeach
        </ul>
    </div>
@endsection
