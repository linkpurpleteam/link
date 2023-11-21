<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = auth()->user(); // Obtener el usuario autenticado
        return view('dashboard', compact('user'));
    }
}
