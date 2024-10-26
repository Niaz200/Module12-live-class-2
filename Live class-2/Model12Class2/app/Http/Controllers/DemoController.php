<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(){

        // return User::get();
        // return User::all();
        // return User::find(11);
        // return User::first();
        // return User::pluck('name');
        // return User::pluck('email', 'id');
        // return User::paginate(2);
        // return User::simplePaginate(2);
        // return User::orderBy('id','asc')->get();
        // return User::orderBy('id','desc')->get();
        // return User::inRandomOrder()->get();
        // return User::inRandomOrder()->first();
        // return User::inRandomOrder()->latest()->first();
        // return User::inRandomOrder()->oldest()->first();
        // return User::groupBy('name')->get();
        // return User::skip(2)->take(2)->get();

        //aggregates

        // return User::skip(2)->take(2)->get();
        // return User::count();
        // return User::max('id');
        // return User::min('id');
        // return User::sum('id');
        // return User::avg('id');


        // select clause

        // return User::get();
        // return User::get(['name','email']);
        // return User::select(['name','email'])->get();
        // return User::select('name')->distinct()->get();

        //where clause
        
        // return User::where('email','john.doe@example.com')->get();

      /* 
       return User::where([
            'email'=>'john.doe@example.com',
            'name'=>'John Doe'
            ])->get();   
            
    */

    /*
    return User::where('email','john.doe@example.com')
        ->where('name','John Doe')
        ->get();

        */


    /*
        return User::whereBetween('id',[12,14])
            ->get();
   
   
    */   
    
    
    // insert

    /*
    return User::create([
        'name'=>'A',
        'email'=>'A@A.com',
    ]);

    */


    //Update
/*
    return User::where('id',21)->update([
        'name'=>'AAAA',
     
    ]);

   */


// for default attributes

 /* 
    User::create([
            'email'=>'A@AABB.com',
        ]);
    
/*


/*
  return User::where('id',22)->delete();
*/


//updateOrCreate
/*

    return User::updateOrCreate(
        ['email'=>'john.doe@example.com'],
        ['email'=>'john.doe@example.com','name'=>'ABCD'],
    ); 
    
 */ 

/*
 return User::updateOrCreate(
    ['email'=>'john.adoe@example.com'],
    ['email'=>'john.doea@example.com','name'=>'ABCD'],
    );


   */ 
  
   
//    return User::all();
//    return User::with('profile')->get();
//    return User::with('profile','post')->get();
//    return User::with('profile','post','comment')->get();
   


   //Post

//    return Post::where('id',1)->get();
//    return Post::where('id',1)->with('comment')->get();
//    return Post::where('id',1)->with('comment','user')->get();

//sub query

/*
   return Post::where('id',1)->with(['comment'=>function($query){
        $query->select('post_id','content');

    }])->get();

*/ 


/*

return Post::where('id',1)->with(['comment'=>function($query){
    $query->orderBy('id','desc');

}])->get();


*/ 


// return Post::with('user','user.profile')->get();

return User::with(['post','post.PostTag.tag'])->get();



   
        
    }
}
