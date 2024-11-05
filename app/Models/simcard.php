<?php

namespace App\Models;
use App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class simcard extends Model
{
    protected $table = 'simcard';

    public function main()
{
    return $this->belongsTo(User::class, 'id', 'ID_Nombre'); // Ajusta 'ID_Nombre' según tu llave en `main`
}
}
