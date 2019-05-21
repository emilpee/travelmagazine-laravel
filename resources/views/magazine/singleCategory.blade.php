@extends ('magazine.layout')

@section('main')

<div>
    <ul class="category-group">
        @foreach ($category->articles as $article)
            <li class="list-group-item"> {{$article}} </li> 
        @endforeach
    </ul> 

</div>

@endsection 
