<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Prestador;
use Illuminate\Http\Request;

class PostPrestadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:prestador');
    }

    //
    public function index()
    {
        return view('dashboard-prestador');
    }

    public function create(){
        return view('create-prestador');
    }

    public function edit(Oferta $oferta){
        
        $this->authorize('update', $oferta);
        return view('edit',[
            'oferta' => $oferta
        ]);
    }
}