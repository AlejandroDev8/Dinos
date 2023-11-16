<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
  // Método para almacenar las imagenes

  public function store(Request $request)
  {

    $imagen = $request->file('file');

    // Generar un nombre único a la imagen

    $nombreImagen = Str::uuid() . '.' . $imagen->extension();

    // Crear una imagen

    $imagenServidor = Image::make($imagen);

    // Redimensionar la imagen

    $imagenServidor->fit(1000, 1000, null, 'center');

    // Almacenar la imagen en el servidor

    $imagenPath = public_path('/uploads' . '/' . $nombreImagen);

    // Guardar la imagen en el servidor

    $imagenServidor->save($imagenPath);

    return response()->json(['imagen' => $nombreImagen]);
  }
}
