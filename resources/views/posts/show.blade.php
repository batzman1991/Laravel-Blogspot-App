@extends('layouts.app')

@section('content')

<div class ="card w-75 card text-black bg-light">
    <div class="card-body">
        <a href ="/posts" class="btn btn-primary"> Go Back </a>
        <a href ="/posts/{{$post->id}}/edit" class ="btn btn-primary"> Edit </a>
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
