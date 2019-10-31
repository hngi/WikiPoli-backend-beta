<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Posts;

class Posts extends Controller
{
 // Method to show all pending posts
 public function pendingPosts()
 {
  $pending = [];
  $posts = Posts::all();
  foreach($posts as $post)
  {
   if($post->status == 0)
   {
    array_push($pending, $post);
   }
  }
  
  if(empty($pending))
  {
   $res['status'] = false;
   $res['status_code'] = 404;
   $res['message'] = "No Pending Posts Found!";
   
   return response()->json($res, $res['status_code']);
  }
   else
  {
   $res['status'] = true;
   $res['status_code'] = 200;
   $res['message'] = "Pending Posts Found!";
   $res['pending_posts'] = $pending;
   
   return response()->json($res, $res['status_code']);
  }
 }
}
