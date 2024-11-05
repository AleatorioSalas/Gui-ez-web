<?php

namespace App\Http\Controllers;

use App\Models\monitor;
use Illuminate\Http\Request;

class monitorController extends Controller
{
    public function showmonitor()
{
    $monitor = monitor::all(); // O utiliza el método que se ajuste a tu caso
    return view('monitor.index', compact('monitor'));
}
}
