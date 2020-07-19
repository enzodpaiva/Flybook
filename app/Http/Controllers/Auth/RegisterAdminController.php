<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin;
use Illuminate\Support\Facades\Hash;



class RegisterAdminController extends Controller
{
    public function registeradmin(){
        return view('auth.adminregister');
    }
    
    public function store(Request $resquest){
        $admin = new admin();
        $admin->name = $resquest->input('name');
        $admin->email = $resquest->input('email');
        $admin->password = Hash::make($resquest->input('password'));
        $admin->save();
        return redirect()->route('admin.dashboard');
    
    }
}
