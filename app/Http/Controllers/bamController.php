<?php

namespace App\Http\Controllers;

use App\Models\Bam; // Asegúrate de que el modelo está importado
use Illuminate\Http\Request;

class BamController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de 'bam' con su asociación a 'main'
        $bams = Bam::with('main')->get();

        // Retornar la vista pasando los datos obtenidos
        return view('bam.index', compact('bams'));
    }
}