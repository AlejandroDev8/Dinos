<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dinos - @yield('title')</title>
  <link rel="shortcut icon" href="{{asset('img/icon.svg')}}" type="image/x-icon">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="text-3xl font-black uppercase">dinos</a>
      {{-- Para saber que un usuario está autenticado --}}
      @auth
      <nav class="flex gap-3 items-center">
        <a class="font-bold text-gray-500 text-lg hover:text-gray-900" href="{{route('posts.index')}}">
          Hola <span class="font-normal">{{auth()->user()->username}}</span>
        </a>
        {{-- Con el "route" traemos el nombre de la ruta nombrada --}}
        <a class="font-bold uppercase text-gray-500 text-lg hover:text-gray-900" href="{{route('logout')}}">cerrar sesión</a>
      </nav>
      @endauth
      {{-- Para saber que un usuario no está autenticado --}}
      @guest  
        <nav class="flex gap-3 items-center">
          <a class="font-bold uppercase text-gray-500 text-lg hover:text-gray-900" href="{{route('login')}}">Login</a>
          {{-- Con el "route" traemos el nombre de la ruta nombrada --}}
          <a class="font-bold uppercase text-gray-500 text-lg hover:text-gray-900" href="{{route('signup')}}">SignUp</a>
        </nav>
      @endguest
    </div>
  </header>
  <main class="container mx-auto mt-10">
    <h2 class="font-black text-center text-3xl mt-10">
      @yield('title')
    </h2>
    @yield('content')
  </main>
  <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
    Proyecto DAW ISC J2 {{ date('Y') }}
  </footer>
</body>

</html>