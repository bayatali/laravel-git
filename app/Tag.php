<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Tag extends Model
{
    protected $fillable =['name'];
    public function posts()
    {
        return $this->morphedByMany('App\Post' , 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('App\Video' , 'taggable');
    }
}
