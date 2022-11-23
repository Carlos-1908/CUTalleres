<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Taller
 *
 * @property $id
 * @property $nombre_taller
 * @property $nombre_profesor
 * @property $correo_profesor
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Taller extends Model
{
    
    static $rules = [
		'nombre_taller' => 'required',
		'nombre_profesor' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_taller','nombre_profesor','correo_profesor','descripcion'];



}
