<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consultadatos['docentes']=docentes::paginate(5);
        return view('Docentes.lista',$consultadatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Docentes.create');
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
        // guardar regsitro en base de datos
        $datos=request()->except('_token');
        if($request->email !=""){
        docentes::insert($datos); }else{echo "ingrese correo electronico";}
        //return response()->json($datos);
        $consultadatos['docentes']=docentes::paginate(5);
        return view('Docentes.lista',$consultadatos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('Docentes.lista');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
        //
         //buscar registro en base de datos
         $docentes=docentes::findOrFail($email);
         return view('Docentes.edit', compact('docentes') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        //
        //modifica datos en bd
        //recibe datos a excepcion de token y metodo
        $datos=request()->except(['_token','_method']);
        docentes::where('email','=',$email)->update($datos);

//        $aspirante=aspirante::findOrFail($id);
//        return view('Aspirantes.edit', compact('aspirante') );
         $consultadatos['docentes']=docentes::paginate(5);
        return view('Docentes.lista',$consultadatos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        //
        //borrar registro de base de datos
        docentes::destroy($email);
        return redirect('Docentes');
    }
}
