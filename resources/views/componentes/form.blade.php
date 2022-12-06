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
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($pieza->Nombre)?$pieza->Nombre:old('Nombre') }}">
    </div>


    <div class="col-md-6">
        <label for="Costo">Costo</label>
        <input type="text" class="form-control" name="Costo" value="{{ isset($pieza->Costo)?$pieza->Costo:old('Costo') }}">
    </div>    
  




<div class="col-md-6">
    <label for="Proveedor">Proveedor</label>
    <input type="text" class="form-control" name="Proveedor" value="{{ isset($pieza->Proveedor)?$pieza->Proveedor:old('Proveedor') }}">
</div>

<div class="col-md-6">
    <label for="Cantidad">Cantidad</label>
    <input type="text" class="form-control" name="Cantidad" value="{{ isset($pieza->Cantidad)?$pieza->Cantidad:old('Cantidad') }}">
</div>

<div class="col-md-6">
    <label for="Numero_serie">Numero de serie</label>
    <input type="text" class="form-control" name="Numero_serie" value="{{ isset($pieza->Numero_serie)?$pieza->Numero_serie:old('Numero_serie') }}">
</div>

<div class="col-md-6">
    <label for="Garantia">Garantía</label>
    <input type="text" class="form-control" name="Garantia" value="{{ isset($pieza->Garantia)?$pieza->Garantia:old('Garantia') }}">
</div>

<div class="col-md-3">
    
</div>

<div class="col-md-6">
    <div class="form-floating">
        <textarea class="form-control" name="Descripcion" style="height: 150px">{{ isset($pieza->Descripcion)?$pieza->Descripcion:old('Descripcion') }}</textarea>
        <label for="Descripcion">Descripción</label>
    </div>  
</div>


<br>
<center>
    <a class="btn btn-danger" href="{{ url('/piezas/') }}">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="{{ $modo }}">    
</center>


