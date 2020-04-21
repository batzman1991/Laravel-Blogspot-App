@extends('layouts.app')

@section('content')

<h1> Blog Posts </h1>
@if(count($posts)>0)
@foreach($posts as $post)
<div class ="card  card text-white  mt-1"id="tcard">
    <div class="card-body">
        <h3><a class ="card-title" href ="/posts/{{$post->id}}"> {{$post->title}}</a> </h3>
        <p class="card-text">{{$post->name}}</p>
        <small class="card-text">Written on {{$post->created_at}}</small>
        
        
      </div>
    </div>
    
@endforeach
{{$posts->links()}}

@else
<p> no post found </p>
@endif
@endsection 