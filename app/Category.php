<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
    	'name',
    	'status_id'
    ];

    public function post()
    {
    	return $this->hasMany(Post::class);
    }

    public function status()
    {
    	return $this->belongsTo(Status::class);
    }
}
