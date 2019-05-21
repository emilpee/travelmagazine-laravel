@extends ('magazine.layout')

@section('main')

    <main class="wrapper">

        <div class="mainimg"></div>
        <div class="tag">
            <h2>Go Europe</h2>
        </div>
        <div class="mainheader">
            <h1>Manarola, Italy</h1>
        </div>
        
       <div class="search">
           <input type="text">
           
       </div>
       <div class="searchbtn">
            <input type="submit">
       </div>

    <div class="grid">
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4>Go Europe</h4>
                <h3>GO HERE</h3>
                <p>Bla kljadladh</p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
        <article class="griditem">
            <section class="img"></section>
            <section class="text">
                <h4></h4>
                <h3></h3>
                <p></p>
            </section>
        </article>
    </div>

        @foreach ($ads as $ad)
            <div class="ad">{{$ad}}</div>
            <div class="ad"></div>
            <div class="ad"></div>
       @endforeach

       <div class="flex">
                <div class="imgtv">
                    <h2></h2>
                    <p></p>
                </div>
                
                <aside class="list">
                               
                    <ul class="list-group">
                        @foreach ($articles as $article)
                            <li class="list-group-item"> {{$article->title}} </li>     
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
