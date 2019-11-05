<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Traits\HasError;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Politician;
use Spatie\Searchable\Search;
use App\PoliticianPost;
use App\Postutility;
use Image;

class PostController extends Controller {

    use HasError;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('users.post.index');
    }

    public function create(Request $request) {
        $input = $request->all();
        $rules = [
            'title' => ['required', 'string', 'unique:posts'],
            'body' => 'required'
        ];


        $error = static::getErrorMessageAjax($input, $rules);
        if ($error) {
            return $error;
        }
        $input['status'] = 0;
        $input['author_id'] = Auth::user()->id;
        $title = $request->title;
        $input['slug'] = $this->makeSlug($title);
        //check mention
        $body = strip_tags($request->body);

        $post = Post::create($input);
        $mentions = (new Search())
                ->registerModel(Politician::class, 'first_name', 'last_name')
                ->search($body);
        if (is_object($mentions)) {
            foreach ($mentions as $mention) {
                PoliticianPost::create([
                    'post_id' => $post->id,
                    'politician_id' => $mention->title
                ]);
            }
        }
        return ([
            'status' => 200,
            'message' => 'Post  Successfully Added , Waiting For Review'
        ]);
    }

    public function draft(Request $request) {

        return ([
            'status' => 422,
            'message' => 'Todo'
        ]);
    }

    public function userprofile(){

        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();
            return(view('web.post.user_profile',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }
    }

   public function postLikePost(){
        if(Auth::check()) {
            $user=Auth::user();
            $post=DB::table('posts')->get();
            if($user==true) {
                $like = DB::table('postutilities')->insert(
                    ['user_id' => $user->id, 'post_id' => $post->id, 'post_like' => true, 'post_dislike' => false]
                );
            }
        }
   }
    public function editUserProfile(){

        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();

            return(view('users.edit_profile',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }
    }

    public function updateUserProfile(Request $request,$id) {

        if(Auth::check()){
            
            $user=Auth::user();
            $posts=DB::table('posts')->where('author_id', $user->id)->get();

            $this->validate($request, [
                'full_name'    =>  'required',
                'email'     =>  'required',
                'location'     =>  'required',
                'description'     =>  'required',
            ]);
            $user = user::find($id);
            $user->full_name = $request->get('full_name');
            $user->email = $request->get('email');
            $user->location = $request->get('location');
            $user->description = $request->get('description');
            $user->save();
            return redirect()->route('users.edit_profile')->with('success', 'Profile Updated');

            // $full_name = $request->input('full_name');
            // $email = $request->input('email');
            // $location = $request->input('location');
            // $description = $request->input('description');
            // DB::update('update student set full_name = ?, email = ?, location = ?, description = ? where id = ?',[$first_name,$email,$location,$description,$id]);
            //$posts=DB::table('posts')->where('author_id', $user->id)->get();
            //echo "Record updated successfully.<br/>";
            //echo '<a href = "/user_profile">Click Here</a> to go back.';
            //return(view('web.post.user_profile',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }

        
     }

    public function updateAvatar(Request $request){
        //handling the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar =  $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path( '/uploads/avatars/' . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
            
        }
        $posts=DB::table('posts')->where('author_id', $user->id)->get();
        return(view('web.post.user_profile',['user'=>$user,'posts'=>$posts]));
    }

   
}
