@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
        <small>écrit le {{$post->created_at}}</small>
            <div>
                {!!$post->body!!}
            </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-lg btn-primary" style="margin-bottom:15px;">Editer l'article</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Supprimer l\'article', ['class' => 'btn btn-lg btn-danger'])}}
    {!! Form::close() !!}
    @endif
@endsection
