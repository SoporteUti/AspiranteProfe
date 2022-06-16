<?php

namespace App\Http\Controllers;

use App\Models\Aspirantes;
use App\Models\Requisitos;
//use Aspirantes as GlobalAspirantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //$datos=request()->except('_token');
        $request->numaspirante;
        $request->nombre;
        $request->apellido;
        $request->email;
        $request->carrera;
        $request->anioegresob;
        $request->anioingresoues;
        $request->notapromb;
        $request->notaavanzo;
        $request->notapaes;
        $request->pruebaling;
        $request->pruebapsico;
        //$num=$request->numaspirante;  captura un valor del arreglo de datos enviados por el form
        /*numaspirante,
        //echo $num;
       // echo dd($request);*/

        if($request->numaspirante >0){
            //insercion en tabla aspirante
            $iaspirante= new aspirantes;//::insert($datos);
            $iaspirante->numaspirante=$request->numaspirante;
            $iaspirante->nombre=$request->nombre;
            $iaspirante->apellido=$request->apellido;
            $iaspirante->email=$request->email;
            $iaspirante->carrera=$request->carrera;
            $iaspirante->save();
            //insercion en tabla requisitos
            $irequisitos= new requisitos;//::insert($datos);
            $irequisitos->numaspirante=$request->numaspirante;
            $irequisitos->anioegresob=$request->anioegresob;
            $irequisitos->anioingresoues=$request->anioingresoues;
            $irequisitos->notapromb=$request->notapromb;
            $irequisitos->notaavanzo=$request->notaavanzo;
            $irequisitos->notapaes=$request->notapaes;
            $irequisitos->pruebaling=$request->pruebaling;
            $irequisitos->pruebapsico=$request->pruebapsico;
            $irequisitos->save();
           //pendiente mejorar requisitos::insert($num);

            }else{
                echo "numero de aspirante no valido \n";}
        //return response()->json($datos);
        $consultadatos['asp']=Aspirantes::paginate(15);
        return view('Aspirantes.lista',$consultadatos);

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
     * @param  \App\Models\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function edit($numaspirante)
    {
        //buscar registro en base de datos

        $aspirante=DB::table('aspirantes')
        -> join('requisitos','aspirantes.numaspirante','=','requisitos.numaspirante')
        ->where('aspirantes.numaspirante','=',$numaspirante)->get();
        //echo dd($aspirante);
    //    $asp=Aspirantes::findOrFail($id);
      //  $req=Requisitos::findOrFail($id);
        //$aspirante=$asp.$req;
        return view('Aspirantes.edit', compact('aspirante') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     * @param  \App\Models\Requisitos  $aspirantes
     */
    public function update(Request $request, $numaspirante)
    {

        //modifica datos en bd
        //insercion en tabla aspirante
        //echo dd($request);


        //$iaspirante= Aspirantes::find($numaspirante);
        //$iaspirante->numaspirante=$request->numaspirante;
        //$iaspirante->nombre=$request->nombre;
        //$iaspirante->apellido=$request->apellido;
        //$iaspirante->email=$request->email;
        //$iaspirante->carrera=$request->carrera;
        //echo dd($iaspirante);
        //$iaspirante->save();

        // Conseguimos el objeto
        $ia=Aspirantes::where('numaspirante', '=', $numaspirante)->first();
        // Si existe
        if(count($ia)>=1){
        // Seteamos un nuevo titulo
        $ia->nombre = $request->nombre;
        $ia->apellido=$request->apellido;
        $ia->email=$request->email;
        $ia->carrera=$request->carrera;
       // Guardamos en base de datos
        $ia->save();
        }
        //////////////////////////////
        $ir=Aspirantes::where('numaspirante', '=', $numaspirante)->first();
        // Si existe
        if(count($ir)>=1){
        // Seteamos un nuevo titulo
        $ir->numaspirante=$request->numaspirante;
        $ir->anioegresob=$request->anioegresob;
        $ir->anioingresoues=$request->anioingresoues;
        $ir->notapromb=$request->notapromb;
        $ir->notaavanzo=$request->notaavanzo;
        $ir->notapaes=$request->notapaes;
        $ir->pruebaling=$request->pruebaling;
        $ir->pruebapsico=$request->pruebapsico;
       // Guardamos en base de datos
        $ir->save();
        }

        //insercion en tabla requisitos
        //$irequisitos= Requisitos::find($numaspirante);//::insert($datos);
        //$irequisitos->numaspirante=$request->numaspirante;
        //$irequisitos->anioegresob=$request->anioegresob;
        //$irequisitos->anioingresoues=$request->anioingresoues;
        //$irequisitos->notapromb=$request->notapromb;
        //$irequisitos->notaavanzo=$request->notaavanzo;
        //$irequisitos->notapaes=$request->notapaes;
        //$irequisitos->pruebaling=$request->pruebaling;
        //$irequisitos->pruebapsico=$request->pruebapsico;
        //$irequisitos->save();


        //recibe datos a excepcion de token y metodo
        //$datos=request()->except(['_token','_method']);
        //aspirantes::where('numaspirante','=',$numaspirante)->update($iaspirante);
        //requisitos::where('numaspirante','=',$numaspirante)->update($irequisitos);
        //$aspirantes=aspirantes::findOrFail($id);
        //return view('Aspirantes.edit', compact('aspirantes') );
        $numaspirante="";
        $consultadatos['asp']=Aspirantes::paginate(15);
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
