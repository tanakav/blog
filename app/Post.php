<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] =  Str::slug($title);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user','id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'categories_posts','post','category');
    }

}
