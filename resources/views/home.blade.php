@extends('layouts.app') @section('content')

<div class="container">
    <h1>Your Blog Posts</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{-- <a href="/posts/create" class="btn btn-primary mt-1 ">Create Post</a> --}}
            <div class="panel panel-default">
                
                <div class="card card text-white  mt-3" id="tcard">

                    <div class="panel-body">
                        
                         @if(count($posts ) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection