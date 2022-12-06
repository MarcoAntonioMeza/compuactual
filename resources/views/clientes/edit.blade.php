@extends('layouts.app')

@section('content')
<div class="container">

<div class="card">
    <div class="card-header">
            <div class="row">
                <div class="col-md-4 lead">
                    <h3 class="card-title">Editar a {{$cliente->Nombre}}</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
    </div>
    <div class="card-body">
        <form action="{{ url('/clientes/'.$cliente->id) }}" method="post" class="lead" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }} 
            @include('clientes.form',['modo'=>'Editar'])
        </form>
    </div>
</div>

   

</div>
@endsection
