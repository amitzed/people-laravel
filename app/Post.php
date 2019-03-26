<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'first_name',
    'last_name',
    'age',
    'email',
    'secret'
  ];
}
