<?php

namespace App\Http\Controllers;
use App\instrutor;
use Illuminate\Http\Request;

class InstrutorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:instrutor');
    }

    public function index(){
        return view('instrutor');
    }

    

}
