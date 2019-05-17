@extends ('magazine.layout')

@section('main')
<div>
    <ul class="article-group">
        
            <div class="box">
                <img src="{{$category->img_url}}">
                <h2> {{$category->name}} </h2> 
                
            </div>
       
    </ul> 

</div>

@endsection 
