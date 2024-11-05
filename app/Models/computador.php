<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computador extends Model
{
    protected $table = 'computador';

    public function main()
{
    return $this->belongsTo(User::class, 'id', 'ID_Nombre'); // Ajusta 'ID_Nombre' según tu llave en `main`
}
}
