<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth; 
class UserController extends Controller
{
    public function profile() {
        return view('profile',array('user'=> Auth::user()));
    }
}
