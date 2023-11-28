@extends('layouts.app')

@section('title')
  Editar Perfil: {{auth()->user()->username}}
@endsection

@section('content')
  <div class="md:flex md:justify-center md:mt-5">
    <div class="md:w-1/2 bg-white shadow p-6">
      <form
        action=""
        class="mt-10 md:mt-0"
        >
        <div class="mb-6">
          <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
          <input type="text" name="username" id="username" placeholder="Ingresa tu nuevo username" class="border p-3 w-full rounded-lg @error('username')
            border-red-500
            @enderror" value="{{auth()->user()->username}}">
          @error('name')
            <span class="text-red-500 text-sm">{{str_replace('username', 'username', $message)}}</span>
          @enderror
        </div>
        <div class="mb-6">
          <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">Imagen del perfil</label>
          <input type="file" accept=".jpg, .jpeg, .png" name="imagen" id="imagen">
        </div>
        <input type="submit" value="guardar cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
      </form>
    </div>
  </div>
@endsection
