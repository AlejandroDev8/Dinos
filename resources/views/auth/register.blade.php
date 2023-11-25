@extends('layouts.app')

@section('title')
  Registrate en Dinos
@endsection

@section('content')
  <div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
      <img src="{{asset('img/signup.jpg')}}" alt="signup" loading='lazy'>
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl mt-2">
      <form action="{{route('signup')}}" method="POST">
        @csrf
        <div class="mb-6">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" class="border p-3 w-full rounded-lg @error('name')
            border-red-500
            @enderror" value="{{old('name')}}">
          @error('name')
            <span class="text-red-500 text-sm">{{str_replace('name', 'nombre', $message)}}</span>
          @enderror
        </div>
        <div class="mb-5">
          <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
          <input type="text" name="username" id="username" placeholder="Ingresa tu username" class="border p-3 w-full rounded-lg @error('username')
          border-red-500
          @enderror" value="{{old('username')}}">
          @error('username')
            <span class="text-red-500 text-sm">{{str_replace('username', 'username', $message)}}</span>
          @enderror
        </div>
        <div class="mb-5">
          <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electrónico</label>
          <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" class="border p-3 w-full rounded-lg @error('email')
          border-red-500
          @enderror" value="{{old('email')}}">
          @error('email')
            <span class="text-red-500 text-sm">{{str_replace('email', 'correo electrónico', $message)}}</span>
          @enderror
        </div>
        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" class="border p-3 w-full rounded-lg @error('password')
          border-red-500
          @enderror">
          @error('password')
            <span class="text-red-500 text-sm">{{str_replace('password', 'contraseña', $message)}}</span>
          @enderror
        </div>
        <div class="mb-5">
          <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir contraseña</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" class="border p-3 w-full rounded-lg">
        </div>
        <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
      </form>
    </div>
  </div>
@endsection