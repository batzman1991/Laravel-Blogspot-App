@extends('layouts.app')

@section('content')

<div class ="card card text-white bg-dark mt-3">
    <div class="card-body ">
        <a href ="/posts" class="btn btn-primary float-right"> Go Back </a>
        @if(!Auth::guest() && Auth::user()->id==$post->user_id)
            <a href ="/posts/{{$post->id}}/edit" class ="btn btn-primary float-right"> Edit </a>
        @endif
            <h1> {{$post->title}}</h1>

            <div> 
                {!!$post->body!!}
            </div>  
                    <hr>  
                    <small> Written on {{$post->created_at}}</small> 
                    <hr> 

@if(!Auth::guest())
@if(Auth::user()->id==$post->user_id)
{!!Form::open(['action'=>['PostsController@destroy', $post->id],'method' => 'POST', 'class'=> 'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
{!!Form::Close()!!}
@endif
@endif

        </div>
    </div>
        




@endsection 
