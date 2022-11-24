<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class DatosAlumnoController extends Controller
{
    public function index(Request $request)
    {
    request()->validate(Alumno::$rules);
    Alumno::create($request->all());
    }

}