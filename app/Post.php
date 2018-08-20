<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\User;
use App\Category;
class Post extends Model
{
    //
    protected $fillable = [
        'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        /**
         * return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
         * El nombre de la tabla de unión de la relación
         * El tercer argumento es el nombre de la clave externa del modelo en el que está definiendo la relación,
         * mientras que el cuarto argumento es el nombre de la clave externa del modelo al que se está uniendo:
         */
        return $this->belongsToMany(Tag::class);
        // return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    // Route model binding
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
