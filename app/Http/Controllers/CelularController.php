<?php

namespace App\Http\Controllers;

use App\Models\celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{
    public function showcelular()
{
    $celular = Celular::all(); // O utiliza el método que se ajuste a tu caso
    return view('celular.index', compact('celular'));
}
}
