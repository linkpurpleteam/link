<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterControllerPrestador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.register-prestador');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validacion
         $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
            'direccion' => 'required|min:5',
            'numero' => 'required|max:13',
            'edad' => 'required|max:2',
            'profesion' => 'required'
        ]);

        Prestador::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'direccion'=> $request->direccion,
            'numero'=> $request->numero,
            'edad'=> $request->edad,
            'profesion'=> $request->profesion

        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Prestador $prestador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestador $prestador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestador $prestador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestador $prestador)
    {
        //
    }
}
