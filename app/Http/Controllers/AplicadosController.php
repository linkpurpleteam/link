<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Oferta;
use App\Models\Prestador;
use App\Models\Solicitante;
use Illuminate\Http\Request;

class AplicadosController extends Controller


{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index(Oferta $oferta, Prestador $prestador, User $user)
    {
        $user = auth()->user();
        $solicitudes = Solicitante::where('user_id', auth()->id())->with('oferta')->paginate(5);
        return view('aplicados.index', [
            'oferta' => $oferta,
            'prestador' => $prestador,
            'user' => $user,
            'solicitudes' => $solicitudes
        ]);
    }
}