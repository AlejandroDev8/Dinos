@extends('layouts.app')

@section('title')
  Crear una nueva publiación
@endsection

@section('content')
  <div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        Imagen Aqui
    </div>
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl mt-10 md:m-5">
      <form action="{{route('signup')}}" method="POST">
        @csrf
        <div class="mb-6">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" class="border p-3 w-full rounded-lg @error('name')
            border-red-500
            @enderror" value="{{old('name')}}">
          @error('name')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{str_replace('name', 'nombre', $message)}}</p>
          @enderror
        </div>
      </form>
  </div>
  </div>
@endsection