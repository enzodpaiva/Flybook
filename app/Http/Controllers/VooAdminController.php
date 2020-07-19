<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\rampa;
use App\asaDelta;
use App\instrutor;

class VooAdminController extends Controller
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
        $voos = DB::table('voos')
        ->join('rampas','voos.rampa_id','=','rampas.id')
        ->join('asa_deltas', 'voos.asaDelta_id','=','asa_deltas.id')
        ->join('users','voos.user_id','=','users.id')
        ->join('instrutors','voos.instrutor_id','=','instrutors.id')
        ->select(
            'voos.id as voo_id',
            'voos.data as voo_data',
            'voos.distancia as voo_distancia',
            'voos.altura as voo_altura',
            'voos.direcao_vento as voo_direcao',
            'voos.status as voo_status',
            'voos.lift as voo_lift',
            'voos.termais as voo_termais',
            'voos.visibilidade as voo_visibilidade',
            'voos.inicio as voo_inicio',
            'voos.fim as voo_fim',
            'voos.velocidade_vento as voo_velocidade',
            'rampas.local as voo_rampa',
            'asa_deltas.nome as voo_asa',
            'users.name as voo_piloto',
            'instrutors.name as voo_instrutor',
            'voos.created_at as voo_criado',
            'voos.updated_at as voo_atualizado',
        )
        ->get();
        return view('voo.list',compact('voos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('voo.create');
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
