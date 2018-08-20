<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'body',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
