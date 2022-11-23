<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class MostrarAlumnosController extends Controller
{
    public function index()
    {
        $Alumno = Alumno::all();
        return view('home',array('Alumno' => $Alumno));
    }
}
