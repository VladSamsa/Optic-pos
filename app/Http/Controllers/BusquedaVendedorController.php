<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BusquedaVendedorController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if ($keyword) {
            $users = User::where('name', 'LIKE', "%{$keyword}%")->get();
            return response()->json($users);
        } else {
            return response()->json(['message' => 'Please provide a keyword'], 400);
        }
    }
}
