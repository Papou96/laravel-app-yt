@extends('layouts.app')

@section('content')
    <h1>Edition de l'article</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titre')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Contenu')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Le contenu de votre article ...'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Editer votre article', ['class' => 'btn btn-lg btn-primary'])}}
    {!! Form::close() !!}
@endsection
