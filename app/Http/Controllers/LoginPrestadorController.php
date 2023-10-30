<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestador;

class LoginPrestadorController extends Controller
{ 
    //
    public function index()
    {
        return view('auth.login-prestador');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ] );

        if(!auth('prestador')->attempt($request->only('email','password'))){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        return redirect()->route('post-prestador.index');
    }
}
