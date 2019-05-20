@extends ('magazine.layout')

@section('main')

    <div class="container">

        <div class="mainimg"></div>
        <div class="tag">
            <h2>Kategori</h2>
        </div>
        <div class="mainheader">
            <h1>Rubrik</h1>
        </div>
        
       <div class="search"></div>

       <div class="articles">
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
           <div class="artimg"></div>
           <div class="artlead">
               <h4></h4>
               <h3></h3>
               <p></p>
           </div>
       </div>

       <div class="ad"></div>
       <div class="ad"></div>
       <div class="ad"></div>

       <div class="flex">
            <h2></h2>
            <p></p>
            <div class="tv">
                <div class="imgtv">
                    <h2></h2>
                    <p></p>
                </div>
                <div class="list">
    {{--                     <ul class="list-group">
                            @foreach ($articles as $article)
                            <li class="list-group-item"> {{$article->title}} </li>
                            <li class="list-group-item"> {{$article->lead}} </li>
                            @csrf          
                            @endforeach
                        </ul> --}}
                    </div>
            </div>
       </div>

       <div class="bigad"></div>

       <div class="cat">
        <h2></h2>
        <p class="ingress"></p>
       </div>

       <div class="categories">

       </div>

    </div>
@endsection
