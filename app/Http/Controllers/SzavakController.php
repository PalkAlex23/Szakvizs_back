<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    public function index()
    {
        $szavaks = response()->json(Szavak::all());
        return $szavaks;
    }

    public function show($id)
    {
        $szavaks = response()->json(Szavak::find($id));
        return $szavaks;
    }
}
