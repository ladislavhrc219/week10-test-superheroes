<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function superhero()
    {
        return $this->belongsToMany(Superhero::class);
    }
}
