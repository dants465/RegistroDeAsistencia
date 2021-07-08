<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroAsistencia extends Model
{
    //
    protected $table='tb_registroasistencia';
    //Campos obligatorios
    protected $fillable=['iddetalle','tema','fecha','hora'];
    //Deshabilitamos los timestamps
    public $timestamps=false;
}
