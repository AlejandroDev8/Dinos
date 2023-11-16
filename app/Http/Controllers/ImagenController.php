<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
  // Método para almacenar las imagenes

  public function store(Request $request)
  {
    $imagen = $request->file('file');

    return response()->json(['imagen' => $imagen->extension()]);
  }
}
