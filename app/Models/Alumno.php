<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Taller
 *
 * @property $id
 * @property $nombre
 * @property $carrera
 * @property $correo
 * @property $telefono
 * @property $taller
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'carrera' => 'required',
		'correo' => 'required',
    'telefono' => 'required',
		'taller' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','carrera','correo','telefono','taller'];



}
