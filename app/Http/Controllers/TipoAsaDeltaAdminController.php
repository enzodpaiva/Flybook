<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tipoAsaDelta;

class TipoAsaDeltaAdminController extends Controller
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
        $tipos = DB::table('tipo_asa_deltas')->get();
        return view('tipos-asa-delta-admin.list', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos-asa-delta-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos = new tipoAsaDelta();
        $tipos->name = $request->input('name');
        $tipos->save();
        return redirect()->route('admin.tipo-asa-delta-list');
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
        $tipo = tipoAsaDelta::find($id);
        if (isset($tipo)) {
            return view('tipos-asa-delta-admin.update', compact('tipo'));
        }
        return redirect()->route('admin.tipo-asa-delta-list');
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
        $tipo = tipoAsaDelta::find($id);
        if (isset($tipo)) {
            $tipo->name = $request->input('name');
            $tipo->save();
        }
        return redirect()->route('admin.tipo-asa-delta-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = tipoAsaDelta::find($id);
        if (isset($tipo)) {
            $tipo->delete();
        }
        return redirect()->route('admin.tipo-asa-delta-list');
    }
}
