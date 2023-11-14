@extends('layouts.app')

@section('title')
  Inicia Sesión
@endsection

@section('content')
  <div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 p-5">
      <img src="{{asset('img/login.jpg')}}" alt="signup" loading='lazy'>
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl mt-2">
      <form method="POST" action="{{route('login')}}" novalidate>
        @csrf
        @if (session('status'))
        <span class="text-red-500 text-xs">{{session('status')}}</span>
        @endif
        <div class="mb-5">
          <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
          <input type="email" name="email" id="email" placeholder="Ingresa tu email" class="border p-3 w-full rounded-lg @error('email')
          border-red-500
          @enderror" value="{{old('email')}}">
          @error('email')
            <span class="text-red-500 text-xs">{{str_replace('email', 'email', $message)}}</span>
          @enderror
        </div>
        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
          <input type="password" name="password" id="password" placeholder="Ingresa tu password" class="border p-3 w-full rounded-lg @error('password')
          border-red-500
          @enderror">
          @error('password')
            <span class="text-red-500 text-xs">{{str_replace('password', 'password', $message)}}</span>
          @enderror
        </div>
        <input type="submit" value="iniciar sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
      </form>
    </div>
  </div>
@endsection