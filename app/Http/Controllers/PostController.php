<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StorePostRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Traits\UpdatePost;
use App\Traits\RegisterPost;
use App\Traits\DeletePost;

class PostController extends Controller
{
    use UpdatePost;
    use RegisterPost;
    use DeletePost;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::get();

        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        $users = User::get();

        return view('createPost',compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        // $validated = $request->validate();
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->user()->associate(auth()->id());
        // $post->save();

        // $post->categories()->attach($request['post-categories']);

        $post = $this->registerPost($request);
        
        
        return redirect()->route('user.posts');
        //return redirect()->route('post.show',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $user = $post->user()->first();
        return view('post',compact('post','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $all_categories = Category::get();
        $post_categories = $post->categories()->get();

        return view('editPost',compact('post','all_categories','post_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        //
        $post = $this->updatePost($request,$post);

        return redirect()->route('post.show',$post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // $post->categories()->detach();
        // $post->delete(); 
        $this->deletePost($post);

        return redirect()->route('post.index');
    }
}
