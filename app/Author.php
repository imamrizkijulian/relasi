<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $fillable = ['nama'];
    protected $visible = ['nama'];
    public $timestamps = true;

    public function books()
    {
    	return $this->hasMany('App\Book','author_id');
    }
}
