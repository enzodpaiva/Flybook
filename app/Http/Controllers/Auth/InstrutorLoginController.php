<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InstrutorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:instrutor');
    }
    
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email'=> $request->email,
            'password'=>$request->password
        ];

        $authOK = Auth::guard('instrutor')->attempt($credentials, $request->remember);
        if($authOK){
            return redirect()->route('instrutor.dashboard');
        }

        return redirect()->back()->withInputs($request->only('email', 'remember'));
    }

    public function index(){
        return view('auth.login-instrutor');
    }
}
