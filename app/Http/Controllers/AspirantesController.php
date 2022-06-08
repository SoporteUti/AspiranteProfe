<?php

namespace App\Http\Controllers;

use App\Models\Aspirantes;
//use Aspirantes as GlobalAspirantes;
use Illuminate\Http\Request;

class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ejecuta consulta de datos en bd
        $datos['asp']=Aspirantes::paginate(15);
        return view('Aspirantes.lista',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Aspirantes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // guardar regsitro en base de datos
        $datos=request()->except('_token');

        if($request->numaspirante >0){
            aspirantes::insert($datos);

            }else{
                echo "numero de aspirante no valido \n";}
        return response()->json($datos);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function show(aspirantes $aspirantes)
    {
        //
        return view('Aspirantes.lista');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //buscar registro en base de datos
        $aspirantes=Aspirantes::findOrFail($id);
        return view('Aspirantes.edit', compact('aspirantes') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //modifica datos en bd
        //recibe datos a excepcion de token y metodo
        $datos=request()->except(['_token','_method']);
        aspirantes::where('id','=',$id)->update($datos);

//        $aspirantes=aspirantes::findOrFail($id);
//        return view('Aspirantes.edit', compact('aspirantes') );
         $consultadatos['aspirantes']=Aspirantes::paginate(5);
        return view('Aspirantes.lista',$consultadatos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //borrar registro de base de datos
        Aspirantes::destroy($id);
        return redirect('Aspirantes');
    }
}
