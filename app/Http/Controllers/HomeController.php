<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\rampa;
use App\voo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }

    public function create()
    {
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
        return view('voo_piloto.create',compact('asas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $resquest)
    {
        $voo = new voo();
        $voo->data = $resquest->input('data');
        $voo->distancia = $resquest->input('distancia');
        $voo->altura = $resquest->input('altura');
        $voo->direcao_vento = $resquest->input('direcao');
        $voo->status = 'aguardando avaliação do instrutor';
        $voo->lift = $resquest->input('lift');
        $voo->termais = $resquest->input('termais');
        $voo->visibilidade = $resquest->input('visibilidade');
        $voo->inicio = $resquest->input('inicio');
        $voo->fim = $resquest->input('fim');
        $voo->velocidade_vento = $resquest->input('velocidade');
        $voo->rampa_id = $resquest->input('rampa');
        $voo->asaDelta_id = $resquest->input('asa');
        $voo->user_id = $resquest->input('user');
        $voo->instrutor_id = $resquest->input('instrutor');
        $voo->observacoes = $resquest->input('observacoes');
        $voo->save();
        return redirect()->route('piloto.voo-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $voos = DB::table('voos')
        ->join('rampas','voos.rampa_id','=','rampas.id')
        ->join('asa_deltas','voos.asaDelta_id','=','asa_deltas.id')
        ->join('instrutors','voos.instrutor_id','=','instrutors.id')
        ->select(
            'voos.id as voo_id',
            'voos.data as voo_data',
            'voos.distancia as voo_distancia',
            'voos.altura as voo_altura',
            'voos.direcao_vento as voo_direcao_vento',
            'voos.status as voo_status',
            'voos.lift as voo_lift',
            'voos.termais as voo_termais',
            'voos.visibilidade as voo_visibilidade',
            'voos.inicio as voo_inicio',
            'voos.fim as voo_fim',
            'voos.velocidade_vento as voo_velocidade_vento',
            'rampas.local as rampas_local',
            'asa_deltas.nome as asa_deltas_nome',
            'instrutors.name as instrutors_name',
            'voos.observacoes as voo_observacao',
            'voos.created_at as voo_criado',
            'voos.updated_at as voo_atualizado',

        )
        ->where('voos.user_id', auth()->user()->id)
        ->get();
        return view('voo_piloto.list',compact('voos'));
    }

    public function mostrarnaview()
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voo = voo::find($id);
        if (isset($voo)) {
            return view('voo_piloto.update', compact('voo'));
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
        $voo = voo::find($id);
        if (isset($voo)) {
            $voo->data = $resquest->input('data');
            $voo->distancia = $resquest->input('distancia');
            $voo->altura = $resquest->input('altura');
            $voo->direcao_vento = $resquest->input('direcao');
            $voo->status = 'aguardando avaliação do instrutor';
            // $voo->lift = $resquest->input('lift');
            // $voo->termais = $resquest->input('termais');
            $voo->visibilidade = $resquest->input('visibilidade');
            $voo->inicio = $resquest->input('inicio');
            $voo->fim = $resquest->input('fim');
            $voo->velocidade_vento = $resquest->input('velocidade');
            $voo->rampa_id = $resquest->input('rampa');
            $voo->asaDelta_id = $resquest->input('asa');
            $voo->user_id = $resquest->input('user');
            $voo->instrutor_id = $resquest->input('instrutor');
            $voo->observacoes = $resquest->input('observacoes');
            $voo->save();
        }
        return redirect()->route('piloto.voo-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voo = voo::find($id);
        if (isset($voo)) {
            $voo->delete();
        }
        return redirect()->route('piloto.voo-list');
    }
}
