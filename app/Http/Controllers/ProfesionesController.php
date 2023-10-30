<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class ProfesionesController extends Controller
{
    public function electricistas(){
        $electricistas = Prestador::where('profesion', 1)->get();
        return view('dashboard-electricistas', compact('electricistas'));
    }

    public function plomeros(){
        $plomeros = Prestador::where('profesion', 2)->get();
        return view('dashboard-plomeros', compact('plomeros'));
    }
}
