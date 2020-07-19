<?php

namespace App\Http\Controllers;
use App\rampa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RampaController extends Controller
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
        $rampas = DB::table('rampas')->get();
        // $rampas = rampa::all();
        return view('rampa.list', compact('rampas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rampa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $resquest)
    {
        $rampa = new rampa();
        $rampa->local = $resquest->input('local');
        $rampa->altitude = $resquest->input('altitude');
        $rampa->quadrante = $resquest->input('quadrante');
        $rampa->save();
        return redirect()->route('admin.rampa-list');
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
        $rampa = rampa::find($id);
        if (isset($rampa)) {
            return view('rampa.update', compact('rampa'));
        }
        return redirect()->route('admin.rampa-list');
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
        $rampa = rampa::find($id);
        if (isset($rampa)) {
            $rampa->local = $resquest->input('local');
            $rampa->altitude = $resquest->input('altitude');
            $rampa->quadrante = $resquest->input('quadrante');
            $rampa->save();
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
        $rampa = rampa::find($id);
        if (isset($rampa)) {
            $rampa->delete();
        }
        return redirect()->route('admin.rampa-list');
    }

    
}
