<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dinos - @yield('title')</title>
  <link rel="shortcut icon" href="{{asset('img/login.jpg')}}" type="image/x-icon">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
  <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="text-3xl font-black uppercase">dinos</a>
      {{-- Para saber que un usuario está autenticado --}}
      @auth
      <nav class="flex gap-3 items-center">
        <a
          href="{{route('posts.create', $user->username)}}"
          class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
            </svg>
          Crear
        </a>
        <a class="font-bold text-gray-500 text-lg hover:text-gray-900" href="{{route('posts.index', $user->username)}}">
          Hola <span class="font-normal">{{auth()->user()->username}}</span>
        </a>
        {{-- Con el "route" traemos el nombre de la ruta nombrada --}}
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit"
            class="font-bold uppercase text-gray-500 text-lg hover:text-gray-900"
            href="{{route('logout')}}">
            cerrar sesión
          </button>
        </form>
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