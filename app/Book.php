<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = ['title', 'author_id', 'amount', 'cover'];
    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    public $timestamps = true;

    public function authors()
    {
    	return $this->belongsTo('App\Author','author_id');
    }
}
