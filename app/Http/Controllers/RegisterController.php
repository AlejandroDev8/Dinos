<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      'password' => 'required'
    ]);
  }
}
