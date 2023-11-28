<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
