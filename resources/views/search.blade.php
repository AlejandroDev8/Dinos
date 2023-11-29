@extends('layouts.app')

@section('title')
Busqueda
@endsection

@section('content')
    <h1 class="text-center md:mt-5">Resultados de búsqueda</h1>

    @if($users->isEmpty())
        <p class="text-center font-bold md:mt-5">No se encontraron resultados.</p>
    @else
    <div class="md:flex md:items-center">
      <ul>
          @foreach($users as $user)
              <li>
                <div class="w-3/12 lg:w6/12 px-5">
                  <a href="{{ route('posts.index', $user->username) }}">
                    <img src="{{ $user->imagen ? asset('perfiles/' . $user->imagen) : asset('/img/user.svg') }}" alt="Imagen de usuario">
                    <p class="mt-5 font-bold">{{$user->username}}</p>
                  </a>
                </div>
              </li>
          @endforeach
      </ul>
    </div>
    @endif
@endsection