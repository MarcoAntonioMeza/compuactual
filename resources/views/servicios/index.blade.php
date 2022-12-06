@extends('layouts.app')

@section('content')
<div class="container lead">
    <div class="row lead text-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>Bienvenido {{ Auth::user()->name }}</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <div class="row lead text-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Dispositivos pendientes para la reparación</h1>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br>
 
    <table class="table table-striped table-hover text-center">
                <thead class="thead-light">
                    <tr>
                        <th>Servicio pendiente</th>
                        <th>Número de servicio</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Ver</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->Nombre_servicio }}</td>
                        <td>{{ $servicio->Numero_servicio }}</td>
                        <td>{{ $servicio->Cliente }}</td>
                        <td>{{ $servicio->Estado }}</td>
                        <td>
                            <a href="{{ url('/inicio/'.$servicio->id.'/edit') }}" class="btn btn-primary">
                                Ver
                            </a> 
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
    </table>
           


</div>
@endsection