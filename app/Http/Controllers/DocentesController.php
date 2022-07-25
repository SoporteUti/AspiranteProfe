<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $doc['docentes']=docentes::paginate(25);
        return view('Docentes.lista',$doc);
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
        $datos=request()->except('_token');
        //return response()->json($datos);
        //
        // guardar regsitro en base de datos
        if($request->email != ""){
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
    public function edit($id)
    {
        //return response()->json($email);
        //
         //buscar registro en base de datos
         //$docente=docentes::find($email);
         $doc= DB::table('docentes')->where('id','=', $id)->get();
         //echo dd($doc);
         return view('Docentes.edit', compact('doc') );
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
        //echo dd($email);
        docentes::destroy($email);
        
        
        return redirect('Docentes');
    }
}
