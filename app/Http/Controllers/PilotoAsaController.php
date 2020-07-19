<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\asaDelta;
use App\rampa;
class PilotoAsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        // $asas = DB::table('asa_deltas')->get();
        $asas = DB::table('asa_deltas')
        ->join('fabricantes','asa_deltas.fabricante_id','=','fabricantes.id')
        ->join('modelo_asa_deltas','asa_deltas.modelo_id','=','modelo_asa_deltas.id')
        ->select(
            'asa_deltas.id as asa_delta_id',
            'asa_deltas.nome as asa_delta_nome',
            'asa_deltas.validade_manutencao as asa_deltas_validade',
            'fabricantes.name as fabricante_nome',
            'modelo_asa_deltas.name as modelo_nome',
        )
        ->where('asa_deltas.user_id', auth()->user()->id)
        ->get();
        return view('asa_piloto.list',compact('asas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('asa_piloto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $resquest)
    {
        $asa = new asaDelta();
        $asa->nome = $resquest->input('Nome');
        $asa->validade_manutencao = $resquest->input('data');
        $asa->fabricante_id = $resquest->input('fabricante');
        $asa->modelo_id = $resquest->input('asamodelo');
        $asa->user_id = $resquest->input('user');
        $asa->save();
        return redirect()->route('piloto.asa-list');
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
        $asa = asaDelta::find($id);
        if (isset($asa)) {
            return view('asa_piloto.update', compact('asa'));
        }
        return redirect()->route('piloto.asa-list');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $resquest, $id)
    {
        $asa = asaDelta::find($id);
        if (isset($asa)) {
            $asa->nome = $resquest->input('Nome');
            $asa->validade_manutencao = $resquest->input('data');
            $asa->fabricante_id = $resquest->input('fabricante');
            $asa->modelo_id = $resquest->input('asamodelo');
            $asa->user_id = $resquest->input('user');
            $asa->save();
        }
        return redirect()->route('piloto.asa-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asa = asaDelta::find($id);
        if (isset($asa)) {
            $asa->delete();
        }
        return redirect()->route('piloto.asa-list');
    }
}
