<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios_guiñez'; // Nombre de la tabla de usuarios

    public function bams()
    {
        return $this->hasMany(Bam::class, 'id_usuario', 'ID_Nombre');
    }
}
