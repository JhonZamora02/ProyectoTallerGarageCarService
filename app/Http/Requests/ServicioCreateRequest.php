<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'garantia_id_garantia'=>'required',
            'empleado_id_empleado'=>'required',
            'vehiculo_id_vehiculo'=>'required',
            'cita_id_cita'=>'required',
            'precio'=>'required',
            'estado'=>'required',
            'tipo_servicios'=>'required',

        ];
    }


    public function messages(){

        return [
          'id_servicio.required' => 'El código del servicio es un campo requerido',
          'garantia_id_garantia.required' => 'El código de la garantia es un campo requerido',
          'empleado_id_empleado.required' => 'El código del empleado es un campo requerido',
          'vehiculo_id_vehiculo.required' => 'El código del vehículo es un campo requerido',
          'cita_id_cita.required' => 'El código de la cita es un campo requerido',
          'precio.required' => 'El precio del servicio es un campo requerido',
          'estado.required' => 'El estado del servicio es un campo requerido',
          'tipo_servicios.required' => 'El tipo del servicio es un campo requerido',
         ];
     
     }
}
