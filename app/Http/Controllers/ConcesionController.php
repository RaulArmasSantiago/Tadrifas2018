<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class ConcesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('concesion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $informacion = DB::table('concesion')
        ->join('concesionarios','concesionarios.id','=','concesion.fk_concesionario')
        ->join('vehiculos','vehiculos.id','=','concesion.fk_vehiculo')
        ->join('tramitador','tramitador.id','=','concesion.fk_tramitador')
        ->join('taximetros','taximetros.id','=','concesion.fk_taximetro')
        ->where('concesion','=',$request->input('concesion'))
        ->first();
        
        if(is_null($informacion)){
            return back();
        }else{
            return view('concesion',compact('informacion'));    
        }

        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateConcesionario(Request $request)
    {
        //
        if($request->input('action') == "actualizar"){
        DB::table('concesionarios')
        ->where('id','=',$request->input('idconcesionario'))
        ->update([
            'nombre' => $request->input('nombre'),
            "fecha_nac" => $request->input('fecha_nac'),
            'direccion' => $request->input('direccion'),
            'municipio' => $request->input('municipio'),
            'estado' => $request->input('estado'),
            'codigopostal' => $request->input('cp'),
            'telefono' => $request->input('telefono'),
            'celular' => $request->input('celular'),
            'celularsec' => $request->input('celularsec'),
            'email' => $request->input('email'),
        ]);
        }else{
            DB::table('concesionarios')->insert([
                'nombre' => $request->input('nombre'),
                "fecha_nac" => $request->input('fecha_nac'),
                'direccion' => $request->input('direccion'),
                'municipio' => $request->input('municipio'),
                'estado' => $request->input('estado'),
                'codigopostal' => $request->input('cp'),
                'telefono' => $request->input('telefono'),
                'celular' => $request->input('celular'),
                'celularsec' => $request->input('celularsec'),
                'email' => $request->input('email'),
            ]);

            $new = DB::table('concesionarios')
            ->select('id')
            ->where('nombre','=',$request->input('nombre'))
            ->where('emial','=',$request->input('email'))   
            ->get();

            $id=null;
            $res = json_decode($new,true);
            foreach ($res as $i => $value) {
                $id=$value;
            }
            $id=implode($id); 
            if ($id!= null) {
                DB::table('concesion')
                ->where('concesion','=',$request->input('concesion'))
                ->update(['fk_concesionario' => $id]);
            }

        }
        return redirect()->action('ConcesionController@show', ['concesion' => $request->input('concesion')]);
    }

    public function updateTramitador(Request $request)
    {
        //
        if($request->input('action') == "actualizar"){
            if($request->input('rentador') == 'si'){
                DB::table('tramitador')
                ->where('id','=',$request->input('idtramitador'))
                ->update([
                    'nombret' => $request->input('nombre'),
                    "fecha_nacimiento" => $request->input('fecha_nacimiento'),
                    'direcciont' => $request->input('direccion'),
                    'municipiot' => $request->input('municipio'),
                    'estadot' => $request->input('estado'),
                    'codigopostalt' => $request->input('cp'),
                    'telefonot' => $request->input('telefono'),
                    'celulart' => $request->input('celular'),
                    'celularsect' => $request->input('celularsec'),
                    'emailt' => $request->input('email'),
                    'rentador' => $request->input('rentador'),
                ]);
            }else{
                DB::table('tramitador')
                ->where('id','=',$request->input('idtramitador'))
                ->update([
                    'nombret' => $request->input('nombre'),
                    "fecha_nacimiento" => $request->input('fecha_nacimiento'),
                    'direcciont' => $request->input('direccion'),
                    'municipiot' => $request->input('municipio'),
                    'estadot' => $request->input('estado'),
                    'codigopostalt' => $request->input('cp'),
                    'telefonot' => $request->input('telefono'),
                    'celulart' => $request->input('celular'),
                    'celularsect' => $request->input('celularsec'),
                    'emailt' => $request->input('email'),
                    'rentador' => 'no'
                ]);
            }
        }else{
            DB::table('concesionarios')->insert([
                'nombret' => $request->input('nombre'),
                'direcciont' => $request->input('direccion'),
                'municipiot' => $request->input('municipio'),
                'estadot' => $request->input('estado'),
                'codigopostalt' => $request->input('codigopostal'),
                'telefonot' => $request->input('telefono'),
                'celulart' => $request->input('celular'),
                'celularsect' => $request->input('celularsec'),
                'emailt' => $request->input('email'),
            ]);

            $new = DB::table('tramitador')
            ->select('id')
            ->where('nombret','=',$request->input('nombre'))
            ->where('emialt','=',$request->input('email'))   
            ->get();

            $id=null;
            $res = json_decode($new,true);
            foreach ($res as $i => $value) {
                $id=$value;
            }
            $id=implode($id); 
            if ($id!= null) {
                DB::table('concesion')
                ->where('concesion','=',$request->input('concesion'))
                ->update(['fk_tramitador' => $id]);
            } 
        }

        return redirect()->action('ConcesionController@show', ['concesion' => $request->input('concesion')]);
    }

    public function updateVehiculo(Request $request)
    {
        //
        DB::table('vehiculos')
        ->where('id','=',$request->input('idvehiculo'))
        ->update([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'año' => $request->input('año'),
            'placa' => $request->input('placas'),
        ]);

        DB::table('taximetros')
        ->where('id','=',$request->input('idtaximetro'))
        ->update([
            'marcat' => $request->input('marcat'),
            'modelot' => $request->input('modelot'),
            'serie' => $request->input('serie'),
        ]);

        return redirect()->action('ConcesionController@show', ['concesion' => $request->input('concesion')]);
    }

    public function acepted (Request $request){
      DB::table('concesion')
      ->where('concesion','=',$request->input('concesion'))
      ->update([
          'fecha'=> date("Y-m-d")
        ]);
    
      $concesion=DB::table('concesion')
      ->where('concesion','=', $request->input('concesion'))
      ->get();
        
      return redirect('home');
    }
}
