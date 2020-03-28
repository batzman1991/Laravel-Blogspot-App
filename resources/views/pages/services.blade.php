@extends('layouts.app')

@section('content')

<h1>{{$title}}</h1>
@if(count($services) > 0)
<div class="card text-white bg-primary mb-3" style="max-width: auto;">
    @foreach($services as $service)
    <div class="card-header">{{$service}}</div>
    <div class="card-body">
           
    </div>
@endforeach 
</ul>
@endif
@endsection
