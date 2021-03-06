<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','short_content','content','author','image','comment_id','profile_img','cover_img',
    ];

    public function comment() {

    	  return $this->hasMany("App\Comment");
    }
}
