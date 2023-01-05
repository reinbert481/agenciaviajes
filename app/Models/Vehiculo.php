<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $nombre
 * @property $marca
 * @property $modelo
 * @property $imagen
 * @property $precioPorDia
 * @property $tipoCaja
 * @property $cantidadPuertas
 * @property $aireAcond
 * @property $kilomHabilitado
 * @property $tipoCobertura
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'imagen' => 'required',
		'precioPorDia' => 'required',
		'tipoCaja' => 'required',
		'cantidadPuertas' => 'required',
		'aireAcond' => 'required',
		'kilomHabilitado' => 'required',
		'tipoCobertura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','marca','modelo','imagen','precioPorDia','tipoCaja','cantidadPuertas','aireAcond','kilomHabilitado','tipoCobertura'];



}
