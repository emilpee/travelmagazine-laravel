@extends('magazine.layout')

@section('main')
@if (Route::has('login'))
    <div class="login-btn">
        @cannot('superUsers-only')    
            <span>You have no authorization.</span>
        @endcannot
        @auth 
        @else
            <span>You have no authorization, please</span>
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
@endif
@can('superUsers-only')

    {!! Form::open(['route' => ['update', $article->article_id], 'method' => 'POST']) !!}
        {{  method_field('POST') }}
        @csrf

        <div class="form-group prio">
            {!! Form::label('prio', 'Priority') !!}
            {!! Form::text('prio', $article->prio, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group img">
            {!! Form::label('img_url', 'Image') !!}
            {!! Form::text('img_url', $article->img_url, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group cat">
            {!! Form::label('category', 'Category') !!}
            {!! Form::text('category_id', $article->category_id, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group author">
            {!! Form::label('author', 'Author') !!}
            {!! Form::text('author', $article->author, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group title">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group lead">
            {!! Form::label('lead', 'Lead') !!}
            {!! Form::text('lead', $article->lead, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group body">
            {!! Form::label('bodytext', 'Body text') !!}
            {!! Form::textarea('bodytext', $article->bodytext, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group submit">
            {!! Form::submit('Edit this article', ['class' => 'btn btn-info']) !!}
        </div>
    
    {!! Form::close() !!}

@endcan


@endsection