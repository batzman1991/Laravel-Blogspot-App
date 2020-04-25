@extends('layouts.app') @section('content')

<div class="container">
    <h1>Profile</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              
                <div class="panel panel-default">
                    
                    <div class="card card  text-white mt-3" id="tcard">
                        <h1>{{$user->name}}'s Profile </h1>
                        <div class="panel-body">
                            
                            
                                    <form enctype="multipart/form-data" action="/profile" method="POST"> 
                                    <label> Update Profile Image </Label>
                                    <input type="file" name="profile"> 
                                    <input type="hidden" name ="_token" value="{{csrf_token()}}">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">

                                    </form>      
                                    
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection