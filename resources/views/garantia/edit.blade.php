@extends('layouts.plantilla') 
@section('contenido') 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Las Garantias</h3> 
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
{{Form::open(array('action'=>array('GarantiaController@update', $garantias->id_garantia),'method'=>'patch'))}} 
    <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="id_garantia">Codigo De La Garantia</label> 
    <input type="number" name="id_garantia" id="id_garantia" class="form-control" value="{{$garantias->id_garantia}}"> 
            </div> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                <br> <label for="garantias_servicios">Servicio asociado</label>
                  <select name="garantias_servicios" id="garantias_servicios" class="form-control selectpicker" data-livesearch="true" required>
                      <option value="" disabled selected>Seleccionar:</option>
                      <option value="Lamina y pintura">Lámina y pintura</option>
                      <option value="Mecanica general">Mecánica general</option>
                      <option value="Sistema electrico">Sistema eléctrico</option>
                      <option value="Cambio de aceite">Cambio de aceite</option>
                  </select>
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"> <br> 
                <label for="tiempo_garantia">Tiempo de garantia</label> 
  <input type="text" name="tiempo_garantia" id="tiempo_garantia" class="form-control" value="{{$garantias->comentarios}}"> 
               </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"><br> 
                    <label for="kilometraje">Kilometraje</label> 
   <input type="text" name="kilometraje" id="kilometraje" class="form-control" value="{{$garantias->condicion}}"> 
                </div> 
            </div>  
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
              <a class="btn btn-info" type="reset" href="{{url('garantia')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                     </div> 
                  </div> 
               </div> 
           {!!Form::close()!!} 
@endsection