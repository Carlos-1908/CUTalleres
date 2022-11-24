<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'carrera' => 'required',
		'correo' => 'required',
    'telefono' => 'required',
		'taller' => 'required',
    ];
    
    protected $fillable = ['nombre','carrera','correo','telefono','taller'];



}
