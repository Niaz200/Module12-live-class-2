<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];



    function user(){
        return $this->belongsTo(User::class);
    }

    function PostTag(){
        return $this->hasMany(PostTag::class);
    }


    function comment(){
        return $this->hasMany(Comment::class);
    }

    //for sub query
    /*

    function comment(){
        return $this->hasMany(Comment::class)->orderBy('id','desc');
    }
 
    */ 

     /* 

    function comment(){
        return $this->hasMany(Comment::class)->where('user_id',24);
    }
 
    
    */ 


}
