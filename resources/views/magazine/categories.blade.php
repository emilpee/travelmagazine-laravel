@extend ('magazine.layout');


    <div>
        
@section('main')

    <ul class="category-group">
        @foreach ($categories as $category)
        <li class="list-group-item"> {{$category->name}} </li> 
        


        @csrf          
        @endforeach
    </ul> --}}
    
    </div>

@endsection()