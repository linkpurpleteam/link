<?php

namespace App\Http\Controllers;

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
}
