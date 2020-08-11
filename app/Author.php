<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = "authors";
    protected $fillable = [
        'name',
        'title',
        'company',
        'email'
    ];
    public function book(){
        return $this->hasMany(Book::class);
    }

}
