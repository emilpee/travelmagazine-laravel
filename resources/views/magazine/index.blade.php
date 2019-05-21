@extends ('magazine.layout')

@section('main')
    <main class="wrapper">

        <div class="mainimg">
            
        </div>
        <div class="tag">
            <h2>Go Europe</h2>
        </div>
        <div class="mainheader">
        @foreach ($mainArticle as $article)
     
            <h1>{{$article->title}}</h1>
            <h3>{{$article->lead}}</h3>
            <p>{{$article->prio}}</p>

        @endforeach
        </div>
    

       <div class="search">
           <input type="text">
           
       </div>
       <div class="searchbtn">
            <input type="submit">
       </div>

       <div class="articles">
           <div class="box1">

           @foreach ($secondArticle as $article)
           <div class="artlead">
           <div class="artimg"></div>
            <div>
                <h4>Titel {{$article->title}} </h4>
                <h3>lead {{$article->lead}}</h3>
                <p> prio {{$article->prio}}</p>
            </div>
           </div>
           @endforeach
           <div class="artlead">
           <div class="artimg"></div>
           <div>
                <h4></h4>
                <h3></h3>
                <p></p>
           </div>

           </div>
           
           <div class="artlead">
           <div class="artimg"></div>
           <div>
           <h4>jhfgjf</h4>
               <h3>fhks</h3>
               <p>khk</p>
               </div>
           </div>
           </div>
           <div class="box2">
           
           <div class="artlead">
           <div class="artimg"></div>
           <div>
           <h4>jhfgjf</h4>
               <h3>fhks</h3>
               <p>khk</p>
               </div>
           </div>
           
           <div class="artlead">
           <div class="artimg"></div>
           <div>
           <h4>jhfgjf</h4>
               <h3>fhks</h3>
               <p>khk</p>
               </div>
           </div>
           
           <div class="artlead">
           <div class="artimg"></div>
           <div>
                <h4>jhfgjf</h4>
               <h3>fhks</h3>
               <p>khk</p>
               </div>   
           </div>
           </div>
       </div>

       <div class="ad"></div>
       <div class="ad"></div>
       <div class="ad"></div>

       <div class="flex">
            <h2></h2>
            <p></p>
            <section class="tv">
                <div class="imgtv">
                    <h2></h2>
                    <p></p>
                </div>
                <aside class="list">
                                            
         <ul class="list-group">
         @foreach ($thirdArticle as $article)
  
            <a href="{{ route('show', $article->article_id) }}" class="list-group-item"> {{$article->title}} </a>
            <li class="list-group-item"> {{$article->lead}} </li>        
           

           @endforeach
        </ul>
                </aside>
                    
            </section>
       </div>

       <div class="big">
        hej
        </div>

       <div class="cat">
        <h2></h2>
        <p class="ingress"></p>
       </div>

       <div class="categories">

       </div>

    </main>
@endsection
