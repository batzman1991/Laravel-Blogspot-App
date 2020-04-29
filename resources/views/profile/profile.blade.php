@extends('layouts.app') @section('content')

<div class="container">
    <h1>Profile</h1>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              
                <div class="panel panel-default">
                <img width="300" height="300" src="{{public_path('\img\profile\/' . Auth::user()->profile)}}" alt="">
                    <div class="card text-white mt-3" id="tcard">
                        <h1>{{Auth::user()->name}}'s Profile </h1>
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
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{'/img/profile/' . Auth::user()->profile}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{Auth::user()->name}}</h5>
            <p class="card-text">Email: {{Auth::user()->email}}</p>
              <a href="#" class="btn btn-primary">Edit profile</a>
            </div>
          </div>
    </div>
</div>
@endsection