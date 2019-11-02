<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class apiController extends Controller
{
    public function create(Request $request)
	{
		/*$users = new user();

		$users->full_name = $request->input('full_name');
		$users->username = $request->input('username');
		$users->email = $request->input('email');
		$users->password = $request->input('password');
		$users->status_id = $request->input('status_id');
		$users->priviledge_id = $request->input('priviledge_id');

        $users->save();*/
        return view('index');
		//return response()->json($users);
	}

    public function search(Request $request)
	{
		$search = $request->get('search');
		$posts = post::where('body', 'like', '%'.$search.'%')->paginate(5);
		//return response()->json($posts);
		return view('search', ['posts'=>$posts]);
    }

    public function show(Request $request)
	{

		return view('index', ['users'=>$users]);
	}


}
