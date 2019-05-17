@extends ('magazine.layout')

@section('main')
<div>
    <ul class="article-group">
        
            <div class="box">
                <img src="{{$article->img_url}}">
                <h2> {{$article->title}} </h2> 
                <h3> {{$article->lead}} </h3> 
            </div>
       
    </ul> 

</div>

@endsection 
