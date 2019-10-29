<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to enable us use authentication
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function commentAuthentication() 
    {   
        // check if user is logged in
        if (Auth::User()) {
            return response()->json([
                "message" => "Comments Enabled!",
                "status" => "success",
                "errorCode" => "200"
            ]);
        } else {
            return response()->json([
                "message" => "You must sign before you can comment!",
                "status" => "failed",
                "errorCode" => "401"
            ]);
        }
    }
}
