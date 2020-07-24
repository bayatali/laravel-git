<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Post extends Model
{
    //
    use SoftDeletes;

    protected $date=['delete_at'];

    protected $fillable =['title','content'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function photos()
    {

        return  $this->morphMany(photo::class,'imageable');
    }

    public function tags()
    {
        return $this->morphToMany( Tag::class,'taggable');
    }

    //Accessor
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
       // return strtoupper($value);
    }
    //Mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title']= strtoupper($value);
    }

}
