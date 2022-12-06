@extends('layouts.app')

@section('content')
<div class="container">

<div class="card">
    <div class="card-header">
            <div class="row">
                <div class="col-md-8 lead">
                    <h3 class="card-title">Editar a {{$pieza->Nombre}}</h3>
                </div>
                
            </div>
    </div>
    <div class="card-body">
        <form action="{{ url('/piezas/'.$pieza->id) }}" method="post" class="lead row g-3" >
            @csrf
            {{ method_field('PATCH') }} 
            @include('componentes.form',['modo'=>'Editar'])
        </form>
    </div>
</div>

   

</div>
@endsection
