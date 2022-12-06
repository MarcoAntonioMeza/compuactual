@extends('layouts.app')

@section('content')


<div class="container">

<div class="card">
    <div class="card-header">
            <div class="row">
                <div class="col-md-6 lead">
                    <h3 class="card-title">Servicio: {{$servicio->Nombre_servicio}}</h3>
                </div>
                <div class="col-md-6 lead">
                    <h3 class="card-title">Estado: {{$servicio->Estado}}</h3>
                </div>
                
            </div>
    </div>
    <div class="card-body">
        <form action="{{ url('/servicios/'.$servicio->id) }}" method="post" class="lead row g-3" >
            @csrf
            {{ method_field('PATCH') }} 
            @include('servicios.form',['modo'=>'Guardar'])
        </form>
    </div>
</div>

@endsection