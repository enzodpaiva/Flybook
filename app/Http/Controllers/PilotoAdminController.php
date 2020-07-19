<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class PilotoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos = DB::table('users')->get();
        return view('piloto-admin.list', compact('pilotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('piloto-admin.create');
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
        $pilotos = User::find($id);
        if (isset($pilotos)) {
            return view('piloto-admin.update', compact('pilotos'));
        }
        return redirect()->route('admin.piloto-list');
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
        $pilotos = User::find($id);
        if (isset($pilotos)) {
            $pilotos->name = $request->input('name');
            $pilotos->idade = $request->input('idade');
            $pilotos->cpf = $request->input('cpf');
            $pilotos->level = $request->input('level');
            $pilotos->registro_abp = $request->input('registro_abp');
            $pilotos->validade_habilitacao = $request->input('validade_habilitacao');
            $pilotos->email = $request->input('email');
            // $pilotos->img_perfil = $request->input('img_perfil');
            $pilotos->save();
        }
        return redirect()->route('admin.piloto-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pilotos = User::find($id);
        if (isset($pilotos)) {
            $pilotos->delete();
        }
        return redirect()->route('admin.piloto-list');
    }
}
