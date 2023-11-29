<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function search(Request $request)
  {
    $this->validate($request, [
      'query' => 'required'
    ]);

    $query = $request->input('query');

    $users = User::where('username', 'like', "%$query%")->get();

    return view('search', ['users' => $users]);
  }
}
