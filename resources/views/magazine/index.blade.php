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
          <a href="{{ route ('show',  $article->article_id) }}">
            <h1>{{$article->title}}</h1>
            <h3>{{$article->lead}}</h3>
          </a>
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
    <a href="{{ route ('show',  $article->article_id) }}">
        <article class="griditem">
            <section class="img">
            <img src="{{$article->img_url}}" alt="">
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
                    <a href="{{ route ('show',  $article->article_id) }}">
                        <h2>{{$article->title}}</h2>
                        <p>{{$article->lead}}</p>
                    </a>        
                </div>
            @endforeach
            
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
       @foreach ($categories as $category)
           <a class="catimg" href="#">
               <img src="{{$category->img_url}}" alt="{{$category->name}}">
               <div>
                   <h4>{{$category->name}}</h4>
                   <p>{{$category->text}}</p>
               </div>
           </a>
        @endforeach
       </div>

    </main>
@endsection
