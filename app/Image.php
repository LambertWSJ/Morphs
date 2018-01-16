<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
    
}
