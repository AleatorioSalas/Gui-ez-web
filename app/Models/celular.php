<?php

namespace App\Models;
use App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class celular extends Model
{
    protected $usuarios_guiñez = 'celular';

    public function main()
{
    return $this->belongsTo(User::class, 'id', 'ID_Nombre'); // Ajusta 'ID_Nombre' según tu llave en `main`
}
}
