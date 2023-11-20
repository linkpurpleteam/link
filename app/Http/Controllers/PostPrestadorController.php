<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Prestador;
use Illuminate\Http\Request;

class PostPrestadorController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:prestador')->except(['show']);
    }

    //
    public function index()
    {
        return view('dashboard-prestador');
    }

    public function show(Oferta $oferta)
    {
        return view('show',[
            'oferta' => $oferta
        ]);
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