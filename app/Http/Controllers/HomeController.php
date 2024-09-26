<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {

             $post = Post::where('post_status','=', 'active')->get();

            $usertype=Auth()->user()->usertype;
            if($usertype == 'user')
            {
                return view('home.homepage', compact('post'));
            }
            else  if($usertype == 'admin')
            {
                return view('admin.adminhome');
            }
    
            else{
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $post = Post::where('post_status','=', 'active')->get();
        return view('home.homepage', compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user=Auth()->user();
        $userid=$user->id;
        $usertype=$user->usertype;
        $username=$user->name;
        $user_status=$user->user_status;
        $userPost = new Post;
        $userPost->title = $request->title;
        $userPost->description = $request->description;
        $userPost->user_type = $usertype;
        $userPost->user_id = $userid;
        $userPost->name = $username;
        $userPost->post_status = 'pending';
        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $userPost->image=$imagename;
        }
        $userPost->save(); 
        Alert::success('Congrats', 'you have added another post successfully');
        return redirect()->back();
    }

    public function my_post()
    {
        $user=Auth::user();
        $user_id=$user->id;
        $data = Post::where('user_id', '=', $user_id)->get();
        return view('home.my_post', compact('data'));
    }

    public function my_post_del($id)
    {
        $data = Post::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'post deleted successfully');
    }

    public function update_post_page($id)
    {
        $data = Post::find($id);
        return view('home.update_post_page',compact('data'));
    }

    public function update_post_data(Request $request,$id)
    {
        $data = Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension ();
            $request->image->move('postimage', $imagename); 
            $data->image=$imagename;
        } 
        
        $data->save();
        return redirect()->back()->with('message', 'post updated successfully');
}

}
