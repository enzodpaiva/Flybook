<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\instrutor;


class InstrutorAdminController extends Controller
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
        $instrutors = DB::table('instrutors')->get();
        return view('instrutor-admin.list', compact('instrutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ja feito em outro controller
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ja feito em outro controller
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
        $instrutors = instrutor::find($id);
        if (isset($instrutors)) {
            return view('instrutor-admin.update', compact('instrutors'));
        }
        return redirect()->route('admin.instrutor-list');
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
        $instrutor = instrutor::find($id);
        if (isset($instrutor)) {
            $instrutor->name = $resquest->input('name');
            $instrutor->idade = $resquest->input('idade');
            $instrutor->cpf = $resquest->input('cpf');
            $instrutor->email = $resquest->input('email');
            $instrutor->registro_abp = $resquest->input('registro_abp');
            $instrutor->img_perfil = $resquest->input('img_perfil');
            $instrutor->validade_habilitacao = $resquest->input('validade_habilitacao');
            $instrutor->save();
            return redirect()->route('admin.instrutor-list');
        }
        return redirect()->route('admin.rampa-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrutor = instrutor::find($id);
        if (isset($instrutor)) {
            $instrutor->delete();
        }
        return redirect()->route('admin.instrutor-list');
    }
}
