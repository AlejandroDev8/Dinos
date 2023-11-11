<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

  // Método para mostrar la vista de registro
  public function index()
  {
    return view('auth.register');
  }

  // Método para registrar un usuario
  public function store(Request $request)
  {
    // Validamos los datos

    $this->validate($request, [
      'name' => 'required|max:20|min:5',
      'username' => 'required|max:20|unique:users|min:3|max:15',
      'email' => 'required|email|unique:users|max:50',
      'password' => 'required|min:6|confirmed'
    ]);

    // Creamos el registro del usuario

    User::create([ //El "create", es el equivalente a "insert into" de SQL
      'name' => $request->name,
      'username' => Str::lower($request->username),
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);
  }
}
