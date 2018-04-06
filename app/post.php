<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['id', 'titulo', 'contenido', 'timestamps'];


}
