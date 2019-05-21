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

       <div class="articles">
           <div class="box1">
           
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
           <h4>jhfgjf</h4>
               <h3>fhks</h3>
               <p>khk</p>
           <div></div>

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

        @foreach ($ads as $ad)
            <div class="ad">{{$ad}}</div>
            <div class="ad"></div>
            <div class="ad"></div>
       @endforeach

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
                        @foreach ($articles as $article)
                            <li class="list-group-item"> {{$article->title}} </li>     
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
