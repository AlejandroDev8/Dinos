@extends('layouts.app')

@section('title')
  Perfil: {{ $user->username }}
@endsection

@section('content')
  <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row mt-5">
        <div class="w-8/12 lg:w6/12 px-5">
          <img src="{{asset('img/user.svg')}}" alt="Imagen de usuario">
        </div>
        <div class="md:w-8/12 lg:w6/12 px-5 flex flex-col items-center md:justify-center py-10 md:py-10 md:items-start">
          <p class="text-gray-700 text-2xl mt-5">{{$user->username }}</p>
          <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
            0
            <span class="font-normal"> Segudiores</span>
          </p>
          <p class="text-gray-800 text-sm mb-3 font-bold">
            0
            <span class="font-normal"> Siguiendo</span>
          </p>
          <p class="text-gray-800 text-sm mb-3 font-bold">
            0
            <span class="font-normal"> Publicaciones</span>
          </p>
        </div>
    </div>
  </div>
  <section class="container mx-auto mt-10">
    <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
    @if ($posts->count())
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-3">
      @foreach ($posts as $post )
        <div>
          <a href="">
            <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">
          </a>
        </div>
      @endforeach
    </div>
    <div>
      {{$posts->links()}}
    </div>
    @else
      <p class="text-center text-sm text-gray-600 uppercase font-bold">No hay publicaciones</p>
    @endif
  </section>
@endsection