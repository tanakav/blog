<?php

namespace App\Traits;

trait DeletePost{
    public function deletePost($post)
    {
        $post->categories()->detach();
        $post->delete();

        return;
    }
}

?>