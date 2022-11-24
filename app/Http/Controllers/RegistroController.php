<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class RegistroController extends Controller
{
    public function index()
    {
        return view('guardarAlumno');
    }

    public function guardar(Request $request){
        request()->validate(Alumno::$rules);
        $alumno = new Alumno($request->input());
        $alumno->save();
        return view('guardarAlumno');
    }
}