@extends('layouts.app')

@section('title')
  Tu Cuenta
@endsection

@section('content')
  <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
        <div class="md:w-8/12 lg:w6/12 px-5">
          <img src="{{asset('img/user.svg')}}" alt="Imagen de usuario">
        </div>
        <div class="md:w-8/12 lg:w6/12 px-5">
          <p class="text-gray-700 text-2xl mt-5">{{ auth()->user()->username }}</p>
        </div>
    </div>
  </div>
@endsection