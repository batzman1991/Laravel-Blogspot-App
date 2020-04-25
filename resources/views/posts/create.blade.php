@extends('layouts.app')

@section('content')




<div class="card" id ="tcard">
    <div class="card-header">
        <h1> Create posts </h1>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}

<div class ="form-group">

    {{Form::label('title', 'Title')}}
    {{Form::text( 'title', '', ['class'=>'form-control','placeholder'=> 'Title'])}}


<div class ="form-group">
    
        <div id="editor">
    
    {{Form::label('body', 'Body')}}
    {{Form::textarea( 'body', '', ['class'=>'form-control','placeholder'=> 'Body'])}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
</div>


</div>
      </blockquote>
    </div>
  </div>





@endsection 