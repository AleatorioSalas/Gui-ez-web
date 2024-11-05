<?php

namespace App\Http\Controllers;

use App\Models\computador;
use Illuminate\Http\Request;

class computadorController extends Controller
{
    public function showcomputador()
{
    $computador = computador::all(); // O utiliza el método que se ajuste a tu caso
    return view('computador.index', compact('computador'));
}
}