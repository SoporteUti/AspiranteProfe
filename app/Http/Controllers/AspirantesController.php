<?php

namespace App\Http\Controllers;

use App\Models\Aspirantes;
use App\Models\Requisitos;
use Error;
//use Aspirantes as GlobalAspirantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;

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
        $validar=$request->validate([
            'numaspirante'=>['required','min:5','numeric']
            ]);

        $request->numaspirante;
        $request->nombre;
        $request->apellido;
        $request->email;
        $request->carrera;
        $request->anioegresob;
        //if($request->anioegresob=null){$request->anioegreso=0;}
        $request->anioingresoues;
        //if($request->anioingresob=null){$request->anioingreso=0;}
        $request->notapromb;
        //if($request->notapromb=null){$request->notapromb=0;}
        $request->notaavanzo;
        //if($request->notaavanzo=""){$request->notapromb="-";}
        $request->notapaes;
        //if($request->notapaes=null){$request->notapaes=0;}
        $request->pruebaling;
        //if($request->pruebaling=null){$request->pruebaling=0;}
        $request->pruebapsico;
        //if($request->pruebapsico=""){$request->pruebapsico="-";}
        //$num=$request->numaspirante;  captura un valor del arreglo de datos enviados por el form
        /*numaspirante,
        //echo $num;
        echo dd($request);*/

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
        //echo $numaspirante;
        
        $asp=DB::table('aspirantes')
             -> join('requisitos','aspirantes.numaspirante','=','requisitos.numaspirante') 
             -> where('aspirantes.numaspirante','=',$numaspirante)->get();
            // echo dd($asp);
             return view('Aspirantes.edit', compact('asp') );
             
             
        //$asp=Aspirantes::findOrFail($id);
        //$req=Requisitos::findOrFail($numaspirante);
        //$req1=Aspirantes::findOrFail($numaspirante);
        //echo dd($req1);
        //$aspirante=$asp.$req;
        
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
   

        // Conseguimos el objeto
        
        //$ia=
        DB::table('aspirantes')    
        ->where('numaspirante', '=', $numaspirante)
        ->update(['nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'email'=>$request->email,
                'carrera'=>$request->carrera]);
    
          
        
        //////////////////////////////
        //$ir=
        DB::table('requisitos')
        ->where('numaspirante', '=', $numaspirante)
        ->update(['anioegresob'=>$request->anioegresob,
                'anioingresoues'=>$request->anioingresoues,
                'notapromb'=>$request->notapromb,
                'notaavanzo'=>$request->notaavanzo,
                'notapaes'=>$request->notapaes,
                'pruebaling'=>$request->pruebaling,
                'pruebapsico'=>$request->pruebapsico]);
        
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
