<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'Books';
    protected $fillable=['title','author','publication_date','updated_by','created_by'];
}
