<?php

namespace App\Http\Controllers;

use App\Event\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::with('user')->get();
        $posts[0];
       return view('Posts.index',compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post();

        if ($file = $request->file('file')){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $post->path = $name;
        }
        $post->title = $request->title;
        $post->content= $request->description;
        $post->user_id=2;
        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorfail($id);
        event(new PostViewEvent($post));
        return view('Posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        $user= Auth::user();
        if ($user->can('update',$post))
        {
            return view('Posts.edit',compact('post'));
        }
        else    {
            echo "بزرگوار شما دسترسی ندارید";
        }


//        if (Gate::allows('edit-post',$post)){
//            return view('Posts.edit',compact('post'));
//        }
//       else {
//           echo "بزرگوار شما دسترسی ندارید";
//       }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $post->title=$request->title;
        $post->content= $request->description;
        $post->save();

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return  redirect('posts');

    }

    public function showMyView($id,$name,$password){
        return view('pages.myView' , compact(['id','name','password']));
    }




}
