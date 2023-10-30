<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class LogoutPrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        auth('prestador')->logout();

        return redirect()->route('login-prestador');
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
