<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
   public function index () 
   {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validacion
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
            'direccion' => 'required|min:5',
            'numero' => 'required|max:13'
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'direccion'=> $request->direccion,
            'numero'=> $request->numero,

        ]);

        //Autenticar Usuario
        //auth()->attempt([
            //'email' => $request->email,
            //'password' => $request->password
        //]);

        //Otra forma    
        auth()->attempt($request->only('email','password'));


        //Redireccionar
        return redirect()->route('post.index');

    }
}
