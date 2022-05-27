@extends('layouts.plantilla') 
@section('contenido') 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Los Servicios</h3> 
            @if (count($errors)>0) 
            <div class="alert alert-danger"> 
                <ul> 
                    @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li> 
                    @endforeach 
                </ul> 
            </div> 
            @endif 
        </div> 
    </div> 
{{Form::open(array('action'=>array('ServicioController@update', $servicios->id_servicio),'method'=>'patch'))}} 
    <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="id_servicio">Codigo Del Servicio</label> 
    <input type="number" name="id_servicio" id="id_servicio" class="form-control" value="{{$servicios->id_servicio}}" disabled> 
            </div> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="garantia_id_garantia">Codigo De La Garantia</label> 
                    <input type="text" name="garantia_id_garantia" id="garantia_id_garantia" class="form-control" 
value="{{$servicios->garantia_id_garantia}}" disabled> 
                </div> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="empleado_id_empleado">Codigo Del Empleado</label> 
                    <input type="text" name="empleado_id_empleado" id="empleado_id_empleado" class="form-control" 
value="{{$servicios->empleado_id_empleado}}" disabled> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="vehiculo_id_vehiculo">Codigo Del Vehiculo</label> 
                    <input type="text" name="vehiculo_id_vehiculo" id="vehiculo_id_vehiculo" class="form-control" 
value="{{$servicios->vehiculo_id_vehiculo}}" disabled> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="cita_id_cita">Codigo De la Cita</label> 
                    <input type="text" name="cita_id_cita" id="cita_id_cita" class="form-control" 
value="{{$servicios->cita_id_cita}}" disabled> 
                </div> 
            </div>  
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"> <br> 
                <label for="precio">Precio</label> 
  <input type="text" name="precio" id="precio" class="form-control" value="{{$servicios->precio}}" disabled> 
               </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group">
               <br> <label for="estado">Estado</label>
                  <select name="estado" id="estado" class="form-control selectpicker" data-livesearch="true" required>
                      <option value="En curso (asignada)">En curso (asignada)</option>
                      <option value="En curso (planificada)">En curso (planificada)</option>
                      <option value="En espera">En espera</option>
                      <option value="Resueltas">Resueltas</option>
                  </select>
               </div>
           </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <div class="form-group">
               <br> <label for="tipo_servicios">Tipo de servicio</label>
                  <select name="tipo_servicios" id="tipo_servicios" class="form-control selectpicker" value="{{$servicios->tipo_servicios}}" data-livesearch="true" disabled>
                      <option value="Lamina y pintura">Lámina y pintura</option>
                      <option value="Mecanica general">Mecánica general</option>
                      <option value="Sistema electrico">Sistema eléctrico</option>
                      <option value="Cambio de aceite">Cambio de aceite</option>
                  </select>
               </div>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
              <a class="btn btn-info" type="reset" href="{{url('servicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                     </div> 
                  </div> 
               </div> 
           {!!Form::close()!!} 
@endsection