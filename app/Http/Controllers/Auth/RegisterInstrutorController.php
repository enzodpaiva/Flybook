<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\instrutor;
use Illuminate\Support\Facades\Hash;

class RegisterInstrutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function registerinstrutor(){
        return view('auth.instrutorregister');
    }
    
    public function store(Request $resquest){
        $instrutor = new instrutor();
        $instrutor->name = $resquest->input('name');
        $instrutor->idade = $resquest->input('idade');
        $instrutor->cpf = $resquest->input('cpf');
        $instrutor->email = $resquest->input('email');
        $instrutor->registro_abp = $resquest->input('registro_abp');
        $instrutor->img_perfil = $resquest->input('img_perfil');
        $instrutor->validade_habilitacao = $resquest->input('validade_habilitacao');
        $instrutor->password = Hash::make($resquest->input('password'));
        $instrutor->save();
        return redirect()->route('admin.instrutor-list');
    
    }
}