<?php

namespace App\Traits;

use App\Post;

trait RegisterPost{

    public function registerPost($request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user()->associate(auth()->id());
        $post->save();

        $post->categories()->attach($request['post-categories']);

        return $post;
    }
}

?>