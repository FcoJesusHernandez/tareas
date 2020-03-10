<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_date', 'update_date'];

    protected $fillable = ['fecha_inicio', 'fecha_termino', 'categoria_id', 'user_id', 'nombre_tarea', 'prioridad', 'descripcion'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
