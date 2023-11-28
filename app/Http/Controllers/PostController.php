<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Oferta;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    //
    public function index()
    {
        $ofertas = Oferta::paginate(5); // Obtener todas las ofertas
        $user = auth()->user(); // Obtener el usuario autenticado
        return view('dashboard', compact('user', 'ofertas'));
    }

    public function show(Oferta $oferta)
    {
        return view('show-user',[
            'oferta' => $oferta
        ]);
    }
}
