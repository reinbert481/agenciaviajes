<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[
            //tabla roles
            'crear-rol',
            'ver-rol',
            'editar-rol',
            'borrar-rol',
            //tabla vehiculos
            'crear-vehiculo',
            'ver-vehiculo',
            'editar-vehiculo',
            'borrar-vehiculo'
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
