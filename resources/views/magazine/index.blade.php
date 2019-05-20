@extends ('magazine.layout')

@section('main')

    <div class="container">

        <div class="mainimg"></div>
        <div class="mainheader"><h1>rubrik</h1></div>
        <div class="tag"><h2>kategori</h2></div>

       <div class="search"></div>

       <div class="article">
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

       <h2 class="tv"></h2>
       <p class="ingress"></p>
       <div>
           <div class="imgtv">
               <h2></h2>
               <p></p>
           </div>
           <div class="list">
                <ul class="list-group">
                    @foreach ($articles as $article)
                    <li class="list-group-item"> {{$article->title}} </li>
                    <li class="list-group-item"> {{$article->lead}} </li>
                    @csrf          
                    @endforeach
                </ul>
            </div>
       </div>

       <div class="bigad"></div>

       <h2></h2>
       <p class="ingress"></p>

       <div class="categories">

       </div>

    </div>
@endsection
