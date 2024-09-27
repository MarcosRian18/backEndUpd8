<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Cidade;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        return response()->json(Estado::all());
    }

    public function getCidades($estadoId)
    {
        return response()->json(Cidade::where('estado_id', $estadoId)->get());
    }
}
