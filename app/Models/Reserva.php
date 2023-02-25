<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $servicioContratado
 * @property $fechaInicio
 * @property $fechaFin
 * @property $estadoReserva
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'servicioContratado' => 'required',
		'fechaInicio' => 'required',
		'fechaFin' => 'required',
		'estadoReserva' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['servicioContratado','fechaInicio','fechaFin','estadoReserva'];



}
