<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'storyline', 'director','year','genre'
    ];

    // public static function published()
    // {
    //     return self::orderBy('title', 'DESC')->get();
    // }    

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
