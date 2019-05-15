@extends ('magazine.layout')

@section('main')

    <div class="content">
        <ul>
            @foreach ($articles as $article)
            <li> {{$article->title}} </li>
            @csrf          
            @endforeach
        </ul>
    </div>
@endsection
