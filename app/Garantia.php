<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    public $timestamps = false;
    protected $primaryKey='id_garantia';
    protected $fillable = ['id_garantia', 'garantias_servicios', 
    'tiempo_garantia', 'kilometraje'];

    public function servicios(){
        return $this->hasMany('App\Servicio');
    }
}
