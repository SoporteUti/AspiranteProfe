<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mod['modulos']=modulos::paginate(25);
        return view('Modulos.lista',$mod);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Modulos.create');
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
        $datos=request()->except('_token');
        //return response()->json($datos);
        //
        // guardar regsitro en base de datos
        if($request->idmodulo != "" && $request->nombremodulo!=""){
            modulos::insert($datos);
        echo"alert('datos ingresados');";
        }else{echo "ingrese id y nombre de modulo";}
        //return response()->json($datos);             
        $consultadatos['modulos']=modulos::paginate(5);
        return view('Modulos.lista',$consultadatos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulos  $modulos
     * @return \Illuminate\Http\Response
     */
    public function show(Modulos $modulos)
    {
        //
        return view('Modulos.lista');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulos  $modulos
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulos $modulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modulos  $modulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulos $modulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulos  $modulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        modulos::destroy($id);
              
        return redirect('Modulos');
    }
}
