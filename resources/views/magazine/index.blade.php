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

    <div class="grid">
    @foreach ($secondArticle as $article)
        <article class="griditem">
            <section class="img">
            <img src="{{$article->img_url}}" style="width:100%;" alt="">
            </section>
            <section class="text">
                <h1>{{$article->title}}</h1>
                <p>{{$article->lead}}</p>
            </section>
        </article>
    @endforeach
    </div>

       <div class="ad"></div>
       <div class="ad"></div>
       <div class="ad"></div>

       <div class="flex">
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
                    
       </div>

       <div class="big">
        
        </div>

       <div class="cat">
        <h2>CATEGORIES</h2>
       </div>

       <div class="categories">
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>
           <a class="catimg" href="#">
               <div>
                   <h4></h4>
                   <p></p>
               </div>
           </a>

       </div>

    </main>
@endsection
