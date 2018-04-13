<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['titulo', 'contenido'];

    public $timestamps = true;


}
