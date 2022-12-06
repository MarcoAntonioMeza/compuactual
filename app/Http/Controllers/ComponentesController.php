<?php

namespace App\Http\Controllers;

use App\Models\Componentes;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $piezas['piezas'] = Componentes::paginate(10);
        return view('componentes.index',$piezas);
    }

    /**
     * Show the form for creating a new resource. @include('componentes.form',['modo'=>'Guardar'])
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $componentes = request()->except('_token');
        Componentes::insert($componentes); 

        return redirect('piezas')->with('mensaje',"Cliente eliminado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function show(Componentes $componentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $pieza = Componentes::findOrFail($id);

        return view('componentes.edit',compact('pieza')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosPieza = request()->except(['_token','_method']);
        Componentes::where('id',$id)->update($datosPieza); 

        $pieza = Componentes::findOrFail($id);

        return view('componentes.edit',compact('pieza')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Componentes  $componentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Componentes::destroy($id);
        
        return redirect('piezas');
    }
}
