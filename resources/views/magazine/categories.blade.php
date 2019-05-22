@extends ('magazine.layout')

@section('navbar')
<div>
    <ul class="category-group">
        @foreach ($categories as $category)
        <a href="{{ route('categories.show', $category->category_id) }}" class="list-group-item"> {{$category->name}} </a> 
        @endforeach
    </ul> 

</div>

@endsection 
