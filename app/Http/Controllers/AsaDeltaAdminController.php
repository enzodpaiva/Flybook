<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fabricante;
use App\modeloAsaDelta;
use App\tipoAsaDelta;
use App\User;

class AsaDeltaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:admin');
     }
     
    public function index()
    {
        $asa_deltas = DB::table('asa_deltas')
        ->join('fabricantes','asa_deltas.fabricante_id','=','fabricantes.id')
        ->join('modelo_asa_deltas','asa_deltas.modelo_id','=','modelo_asa_deltas.id')
        ->join('users','asa_deltas.user_id','=','users.id')
        ->select(
            'asa_deltas.id as asa_delta_id',
            'asa_deltas.nome as asa_delta_nome',
            'asa_deltas.validade_manutencao as asa_deltas_validade',
            'fabricantes.name as fabricante_nome',
            'modelo_asa_deltas.name as modelo_nome',
            'users.name as piloto_nome',
        )
        ->get();
        return view('asa-delta.list', compact('asa_deltas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asa-delta.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
