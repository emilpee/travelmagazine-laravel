@extends ('magazine.layout')

@section('main')
    <main class="wrapper">

    @foreach ($mainArticle as $article)
        <div class="mainimg">
            <img src="{{$article->img_url}}">
        </div>
        <div class="tag">
            <h2>Go Europe</h2>
        </div>
        <div class="mainheader">
     
            <h1>{{$article->title}}</h1>
            <h3>{{$article->lead}}</h3>
        </div>
    @endforeach
        
    

       <div class="search">
           <input type="text">
           
       </div>
       <div class="searchbtn">
            <input type="submit">
       </div>

    <div class="grid">
    @foreach ($secondArticle as $article)
    <a href="{{ route ('show',  $article->article_id) }}">
        <article class="griditem">
            <img src="{{$article->img_url}}" style="width:100%;" alt="">
            </section>
            <section class="text">
                <h1>{{$article->title}}</h1>
                <p>{{$article->lead}}</p>
            </section>
        </article>
    </a>                
    @endforeach
    </div>

        @foreach ($ads as $ad)
            <div class="ad">
                <img src="{{$ad->img_url}}">
            </div>
        @endforeach
         

       <div class="flex">
            @foreach ($thirdChosenArticle as $article)
                <div class="imgtv" style="background: url( {{$article->img_url}} ); background-size:cover;">
                    <div class="box">
                        <a href="{{ route ('show',  $article->article_id) }}">
                            <h2>{{$article->title}}</h2>
                            <p>{{$article->lead}}</p>
                        </a> 
                    </div>       
                </div>
            @endforeach
            
        <aside class="list">                                         
            <ul class="list-group">
                @foreach ($thirdArticle as $article)       
                    <a href="{{ route('show', $article->article_id) }}" class="list-group-item"> {{$article->title}} </a>
                    <hr>           
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
       @foreach ($categories as $category)
           <a class="catimg" href="#">
               <div class="img" style="background-image: url({{$category->img_url}});">
                   <h4>{{$category->name}}</h4>
                   <p>{{$category->text}}</p>
               </div>
           </a>
        @endforeach
       </div>

    </main>
@endsection
