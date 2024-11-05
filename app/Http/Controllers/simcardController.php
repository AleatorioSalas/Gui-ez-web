<?php

namespace App\Http\Controllers;

use App\Models\simcard;
use Illuminate\Http\Request;

class simcardController extends Controller
{
    public function showsimcard()
{
    $simcard = simcard::all(); // O utiliza el método que se ajuste a tu caso
    return view('simcard.index', compact('simcard'));
}
}
