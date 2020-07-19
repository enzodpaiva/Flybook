<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\modeloAsaDelta;

class ModeloAsaDeltaAdminController extends Controller
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
        $modelos = DB::table('modelo_asa_deltas')->get();
        return view('modelo-asa-delta.list', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelo-asa-delta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelos = new modeloAsaDelta();
        $modelos->name = $request->input('name');
        $modelos->save();
        return redirect()->route('admin.modelo-asa-delta-list');
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
        $modelos = modeloAsaDelta::find($id);
        if (isset($modelos)) {
            return view('modelo-asa-delta.update', compact('modelos'));
        }
        return redirect()->route('admin.modelo-asa-delta-list');
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
        $modelos = modeloAsaDelta::find($id);
        if (isset($modelos)) {
            $modelos->name = $request->input('name');
            $modelos->save();
        }
        return redirect()->route('admin.modelo-asa-delta-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelos = modeloAsaDelta::find($id);
        if (isset($modelos)) {
            $modelos->delete();
        }
        return redirect()->route('admin.modelo-asa-delta-list');
    }
}
