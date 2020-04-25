<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // Table Name 
 
   protected $table = 'posts'; 
   // protected  
    public $primaryKey ='id'; 
    // Time stamps 
    public $timestamps=true;

    public function user(){
        return$this ->belongsTO(User::class);
    }

}
