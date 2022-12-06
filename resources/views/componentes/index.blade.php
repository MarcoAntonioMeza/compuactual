@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card lead">
        <div class="card-header">
            <div class="row">
                <div class="col-md-4 lead">
                    <h3 class="card-title">Piezas</h3>
                </div>
                
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <a href="{{ url('/piezas/create') }}" class = "btn btn-success">Agregar nuevo</a>
                </div>
            </div>
        
        </div>
        <div class="card-body">
            
            <table class="table table-light text-center">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Garantía</th>
                        <th>Numero de serie</th>
                        <th>Costo</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($piezas as $pieza)
                    <tr>
                        <td>{{ $pieza->id }}</td>
                        <td>{{ $pieza->Nombre }}</td>
                        <td>{{ $pieza->Cantidad }}</td>
                        <td>{{ $pieza->Garantia }}</td>
                        <td>{{ $pieza->Numero_serie }}</td>
                        <td>{{ $pieza->Costo }}</td>
                        <td>{{ $pieza->Proveedor }}</td>
                        <td>
                            <a href="{{ url('/piezas/'.$pieza->id.'/edit') }}" class="btn btn-primary">
                                Editar
                            </a> 

                            <form action="{{ url('/piezas/'.$pieza->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick=" return confirm('¿Desea eliminar a {{ $pieza->Nombre}}?')" 
                                value="Borrar" class="btn btn-danger"> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection