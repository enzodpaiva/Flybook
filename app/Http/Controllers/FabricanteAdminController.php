<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fabricante;
use Illuminate\Support\Facades\DB;

class FabricanteAdminController extends Controller
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
        $fabricantes = DB::table('fabricantes')->get();
        return view('fabricante.list', compact('fabricantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fabricante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fabricantes = new fabricante();
        $fabricantes->name = $request->input('name');
        $fabricantes->cnpj = $request->input('cnpj');
        $fabricantes->save();
        return redirect()->route('admin.fabricante-list');
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
        $fabricante = fabricante::find($id);
        if (isset($fabricante)) {
            return view('fabricante.update', compact('fabricante'));
        }
        return redirect()->route('admin.fabricante-list');
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
        $fabricante = fabricante::find($id);
        if (isset($fabricante)) {
            $fabricante->name = $request->input('name');
            $fabricante->cnpj = $request->input('cnpj');
            $fabricante->save();
        }
        return redirect()->route('admin.fabricante-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fabricante = fabricante::find($id);
        if (isset($fabricante)) {
            $fabricante->delete();
        }
        return redirect()->route('admin.fabricante-list');
    }
}
