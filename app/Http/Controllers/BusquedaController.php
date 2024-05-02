<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if ($keyword) {
            $personas = Persona::where('razon_social', 'LIKE', "%{$keyword}%")->get();
            return response()->json($personas);
        } else {
            return response()->json(['message' => 'Please provide a keyword'], 400);
        }
    }
}
