@extends('magazine.layout')

@section('main')

    <div class="container">
            <h1>Skyddad sida</h1>

        <ul class="list-group">
            @foreach ($articles as $article)
            <li class="list-group-item"> {{$article->title}} </li>
            @csrf          
            @endforeach
        </ul>
 
    
       
    </div>
@endsection
