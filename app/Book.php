<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author_id',
        'abstract'
    ];
    public function author()
    {
        # code...
        return $this->belongsTo(Author::class);

    }
}
