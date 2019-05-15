@extends ('magazine.layout')

@section('main')
<div>
    <ul class="category-group">
        @foreach ($categories as $category)
        <li class="list-group-item"> {{$category->name}} </li> 
     
        @endforeach
    </ul> 
    
</div>

@endsection