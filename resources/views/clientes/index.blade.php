@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card lead">
        <div class="card-header">
            <div class="row">
                <div class="col-md-4 lead">
                    <h3 class="card-title">Clientes</h3>
                </div>
                
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <a href="{{ url('/clientes/create') }}" class = "btn btn-success">Agregar cliente</a>
                </div>
            </div>
        
        </div>
        <div class="card-body">
            
            <table class="table table-light text-center">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->Nombre }}</td>
                        <td>{{ $cliente->Apellidos }}</td>
                        <td>{{ $cliente->Telefono }}</td>
                        <td>{{ $cliente->Correo }}</td>
                        
                    
                        <td>
                            <a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-primary">
                                Editar
                            </a> 

                        <form action="{{ url('/clientes/'.$cliente->id) }}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick=" return confirm('¿Desea eliminar a {{ $cliente->Nombre}}?')" 
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