@extends('layouts.app')

@section('content')

<h1> Edit posts </h1>

{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST']) !!}

<div class ="form-group">

    {{Form::label('title', 'Title')}}
    {{Form::text( 'title', $post->title, ['class'=>'form-control','placeholder'=> 'Title'])}}


<div class ="form-group">
    {{form::hidden('_method','PUT')}}
    {{Form::label('body', 'Body')}}
    {{Form::textarea( 'body', $post->body, ['class'=>'form-control','placeholder'=> 'Body'])}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection 