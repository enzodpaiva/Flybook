<?php

namespace App\Http\Controllers;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        return view('admin');
    }

    // public function rampaList()
    // {
    //     return view('rampa.list');
    // }

    
}
