@extends('magazine.layout')

@section('main')


{!! Form::open(['route' => ['articles.update', $article->article_id], 'method' => 'post']) !!}
{{method_field('PATCH')}}
    @csrf
    <div class="form-group">
        {!! Form::label('prio', 'Prio') !!}
        {!! Form::text('prio', $article->prio, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('category', 'Category') !!}
        {!! Form::text('category_id', $article->category_id, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lead', 'Lead') !!}
        {!! Form::text('lead', $article->lead, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bodytext', 'bodytext') !!}
        {!! Form::text('bodytext', $article->bodytext, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('img_url', 'Img_url') !!}
        {!! Form::text('img_url', $article->img_url, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit this article', ['class' => 'btn btn-info']) !!}
 
{!! Form::close() !!}

@endsection