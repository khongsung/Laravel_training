<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";
    protected $fillable = [
    	'name'
    ];

    public function category()
    {
    	return $this->hasMany(Category::class);
    }

    public function post()
    {
    	return $this->hasMany(Post::class);
    }
}
