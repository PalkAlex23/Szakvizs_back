<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index()
    {
        $temas = response()->json(Tema::all());
        return $temas;
    }

    public function show($id)
    {
        $temas = response()->json(Tema::find($id));
        return $temas;
    }
}
