<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    public function authors() {

        return $this->belongsTo('App\Author', 'author_id');

    }
}
