<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_servicio';
    protected $fillable = ['id_servicio', 'garantia_id_garantia', 'empleado_id_empleado', 
    'vehiculo_id_vehiculo', 'cita_id_cita', 'precio', 'estado', 'tipo_servicios' ];

    //Relacion con la tabla detalle servicio

    /*public function detalle_servicios(){
        return $this->hasMany('App\DetalleServicio');
    } +/  

    /*public function citas(){
        return $this->belongsTo('App\Cita','cita_id_cita');
    }*/

    public function garantias(){
        return $this->belongsTo('App\Garantia', 'garantia_id_garantia');
    }

    /*public function vehiculos(){
        return $this->belongsTo('App\Vehiculo', 'vehiculo_id_vehiculo');
    }*/

    /*public function empleados(){
        return $this->belongsTo('App\Empleados', 'empleado_id_empleado');
    }*/


}
