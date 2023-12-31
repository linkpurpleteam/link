<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Oferta $oferta)
    {
        return view('solicitantes.index',[
            'oferta' => $oferta
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitante $solicitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitante $solicitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitante $solicitante)
    {
        //
    }
}
