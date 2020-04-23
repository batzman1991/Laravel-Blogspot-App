@extends('layouts.app') @section('content')

<div class="container">
    <h1>Profile window</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{$user->name}} Profile </h1>
                <div class="panel panel-default">
                    
                    <div class="card card  text-white mt-3" id="tcard">

                        <div class="panel-body">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection