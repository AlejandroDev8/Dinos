<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
  }
}
