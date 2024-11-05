<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bam; // Asegúrate de tener el modelo Bam si es necesario

class BamController extends Controller
{
    public function showBam()
    {
        $bams = Bam::all(); // Obtener todos los registros de la tabla bam
        return view('bam.index', compact('bams')); // Retornar la vista con los datos
    }
}