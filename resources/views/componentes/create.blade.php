@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-4 lead">
                    <h3 class="card-title">Agregar pieza</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/piezas') }}" class="lead row g-3" >
                @csrf
                @include('componentes.form',['modo'=>'Guardar'])
                
            </form>
        </div>
    </div>
</div>
@endsection

