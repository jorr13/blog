<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    /*
    * No le tienes que poner el nombre de la tabla 
    * a menos que el nombre de la tabla
    * no sea el plural exacto del
    * nombre del modelo
    */
    //protected $table = 'posts';

    protected $fillable = ['titulo', 'contenido'];    
    
    /*
    * Por defecto los modelos mantienen 
    * los timestamp por su cuenta, cuando 
    * creas un nuevo bjeto de esta clase 
    * en la base de datos, ELOQUENT pone 
    * la fecha, así que ésta linea sobra
    */
    //public $timestamps = true;
}
