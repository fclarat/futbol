<?php

namespace App\Http\Controllers;

use App\Partido;

class PartidosController extends Controller
{
    public function create()
    {
        return view('partidos.create');
    }

    public function store()
    {
        Partido::create([
            'nombre' => request('nombre'),
        ]);

        return redirect('/home');
    }
}
