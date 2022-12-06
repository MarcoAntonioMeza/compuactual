@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li>
            {{  $error  }}
        </li>
    @endforeach
    </ul>
</div>
@endif

<div class="col-md-6">
    <label for="Numero_serie">Cliente</label>
    <input type="text" class="form-control" name="Cliente" value="{{ isset($servicio->Cliente)?$servicio->Cliente:old('Cliente') }}">
</div>

<div class="col-md-6">
    <label for="Nombre_servicio">Nombre del servicio</label>
    <input type="text" class="form-control" name="Nombre_servicio" value="{{ isset($servicio->Nombre_servicio)?$servicio->Nombre_servicio:old('Nombre_servicio') }}">
</div>

<div class="col-md-4">
    <label for="Estado">Estado del servicio</label>
    <input type="text" class="form-control" name="Estado" value="{{ isset($servicio->Estado)?$servicio->Estado:old('servicio') }}">
</div>

<div class="col-md-4">
    <label for="Numero_servicio">Número de servicio</label>
    <input type="text" class="form-control" name="Numero_servicio" value="{{ isset($servicio->Numero_servicio)?$servicio->Numero_servicio:old('Numero_servicio') }}">
</div>

<div class="col-md-4">
    <label for="Numero_servicio">Fecha de recepción</label>
    
    <input size="16" type="date" class="form-control" name="Fecha_recepcion" value="{{ isset($servicio->Fecha_recepcion)?$servicio->Fecha_recepcion:old('Fecha_recepcion') }}">

</div>

<div class="col-md-6">
    <div class="form-floating">
        <textarea class="form-control" name="Caacteristicas" style="height: 200px">
            {{ isset($servicio->Caacteristicas)?$servicio->Caacteristicas:old('Caacteristicas') }}
        </textarea>
        <label for="Caacteristicas">Descripcion del equipo</label>
    </div>  
</div>

<div class="col-md-6">
    <div class="form-floating">
        <textarea class="form-control" name="Descripcion_daño" style="height: 200px">
            {{ isset($servicio->Descripcion_daño)?$servicio->Descripcion_daño:old('Descripcion_daño') }}
        </textarea>
        <label for="Descripcion">Descripción del daño</label>
    </div>  
</div>

<div class="col-md-6">
    <label for="Numero_serie">Costo aproximado del servicio</label>
    <input type="text" class="form-control" name="Costo_aprx" value="{{ isset($servicio->Costo_aprx)?$servicio->Costo_aprx:old('Costo_aprx') }}">
</div>

<div class="col-md-6">
    <label for="Acuenta">Acuenta del servicio</label>
    <input type="text" class="form-control" name="Acuenta" value="{{ isset($servicio->Acuenta)?$servicio->Acuenta:old('Acuenta') }}">
</div>

<br>
<center>
    <a class="btn btn-danger" href="{{ url('/inicio/') }}">Regresar</a>
    <!--<input type="submit" class="btn btn-primary" value="{{ $modo }}">  -->  
</center>
