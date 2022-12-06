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

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}">
</div>

<div class="form-group">
    <label for="Apellidos">Apellidos</label>
    <input type="text" class="form-control" name="Apellidos" value="{{ isset($cliente->Apellidos)?$cliente->Apellidos:old('Apellidos') }}">
</div>

<div class="form-group">
    <label for="Direccion">Dirección</label>
    <input type="text" class="form-control" name="Direccion" value="{{ isset($cliente->Direccion)?$cliente->Direccion:old('Direccion') }}">
</div>

<div class="form-group">
    <label for="Telefono">Teléfono</label>
    <input type="text" class="form-control" name="Telefono" value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono') }}">
</div>

<div class="form-group">
    <label for="Nombre">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($cliente->Correo)?$cliente->Correo:old('Correo') }}">
</div>


<br>
<center>
    <a class="btn btn-danger" href="{{ url('/clientes/') }}">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="{{ $modo }}">    
</center>
