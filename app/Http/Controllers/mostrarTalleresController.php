<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;

class mostrarTalleresController extends Controller
{
    public function index()
    {
        $Taller = Taller::all();
        return view('alumnos',array('Taller' => $Taller));
    }
}
