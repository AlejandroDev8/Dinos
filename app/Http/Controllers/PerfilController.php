<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class PerfilController extends Controller
{

  public function __construct()
  {
    $this->middleware(['auth']);
  }

  public function index()
  {
    return view('profile.index');
  }

  public function store(Request $request)
  {

    // Modificar el Request
    $request->request->add([
      'username' => Str::slug($request->username)
    ]);

    $this->validate($request, [
      'username' => [
        'required',
        'max:20',
        'unique:users,username,' . auth()->user()->id,
        'min:3',
        'max:15',
        'not_in:twitter,facebook,instagram,editar-perfil'
      ],
    ]);

    if ($request->imagen) {
      $imagen = $request->file('imagen');

      // Generar un nombre único a la imagen

      $nombreImagen = Str::uuid() . '.' . $imagen->extension();

      // Crear una imagen

      $imagenServidor = Image::make($imagen);

      // Redimensionar la imagen

      $imagenServidor->fit(1000, 1000, null, 'center');

      // Almacenar la imagen en el servidor

      $imagenPath = public_path('/perfiles' . '/' . $nombreImagen);

      // Guardar la imagen en el servidor

      $imagenServidor->save($imagenPath);
    }

    // Guardar cambios

    $usuario = User::find(auth()->user()->id);

    // Obtener la imagen anterior y eliminarla si existe
    $imagenAnterior = $usuario->imagen;
    if ($imagenAnterior && File::exists(public_path('perfiles') . '/' . $imagenAnterior)) {
      File::delete(public_path('perfiles') . '/' . $imagenAnterior);
    }

    $usuario->username = $request->username;
    $usuario->imagen = $nombreImagen ?? auth()->user()->imagen ?? null;

    $usuario->save();

    // Redireccionar al usuario

    return redirect()->route('posts.index', $usuario->username);
  }
}
