<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    public function image()
    {
        return $this->belongsToMany(Image::class, 'superhero_image','superhero_id', 'image_id');
    }
}
