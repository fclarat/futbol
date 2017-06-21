<?php

namespace App\Http\Controllers;

use App\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$jugadores = Jugador::all();

    	return view('jugadores.index', compact('jugadores'));
    }
}
