@extends('layouts.app')

@section('title')
  Crear una nueva publiación
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
  <div class="md:flex md:items-center mt-10 md:m-5">
    <div class="md:w-1/2 px-10">
        <form
          id="dropzone"
          class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"
          action="{{route('imagenes.store')}}"
          method="POST"
          enctype="multipart/form-data"
          >
          @csrf
        </form>
    </div>
    <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl mt-10 md:m-5">
      <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="mb-6">
          <label
            for="titulo"
            class="mb-2 block uppercase text-gray-500 font-bold"
            >
            Titulo
          </label>
          <input
            type="text"
            name="titulo"
            id="titulo"
            placeholder="Ingresa el titulo de la publicación"
            class="border p-3 w-full rounded-lg @error('titulo')
            border-red-500
            @enderror" value="{{old('titulo')}}">
          @error('titulo')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label
            for="descripcion"
            class="mb-2 block uppercase text-gray-500 font-bold"
            >
            Descrición
          </label>
          <textarea
            name="descripcion"
            id="descripcion"
            placeholder="Descripción el titulo de la publicación"
            class="border p-3 w-full rounded-lg @error('descripcion')
            border-red-500
            @enderror"
          >{{old('descripcion')}}</textarea>
          @error('descripcion')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
          @enderror
        </div>
        <input
          type="submit"
          value="Crear Publicación"
          class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
        >
      </form>
  </div>
  </div>
@endsection