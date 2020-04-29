<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth; 
use Intervention\Image\Facades\Image;
class UserController extends Controller
{
    public function profile() {
        return view('profile.profile',array('user'=> Auth::user()));
    }

    public function profilepub(){

        return view('profile.profile',array('user'=>user()));
    }

    public function index() {

        $users = User::all();

        //dd($users);

        return view('test')->with('users',$users);
    }


    public function update_profile(Request $request){
            
        if($request->hasFile('profile')){

            $profile = $request->file('profile');
            $filename  = time() . '.' . $profile->getClientOriginalExtension();
             Image::make($profile)->resize(300,300)->save(public_path('/img/profile/' . $filename));
             ini_set('memory_limit', '256M');
            // $profile =$request->file('profile');
            // $filename = time().'.' . $profile->getClientOrignalExtension();
            // Image::make($profile)->resize(300,300)->save(public_path('/img/profile' . $filename));
            Auth::user()->profile = $filename;
            Auth::user()->save();
        }
        return view ('profile.profile');
    }

    // public function editProfile(User $user){
    //     dd($user);
    //     return view('profile.edit');
    // }
}
