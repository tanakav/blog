<?php

namespace App\Traits;

use App\Category;

trait UpdatePost{
    public function updatePost($request,$post)
    {
        $categories = Category::find($request->new_categories);
        $post->title =$request->title;
        $post->content =$request->content;
        $post->save();
        $post->categories()->detach();
        $post->categories()->attach($categories);

        return $post;
    }
}





?>