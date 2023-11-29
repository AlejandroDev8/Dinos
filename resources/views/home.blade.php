@extends('layouts.app')

@section('title')
  Página Inicial
@endsection

@section('content')
  @if ($posts->count())
  <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-3">
    @foreach ($posts as $post )
      <div>
        <a href="{{route('posts.show', ['user' => $post->user, 'post' => $post])}}">
          <img src="{{asset('uploads') . '/' . $post->imagen}}" alt="Imagen del post {{$post->titulo}}">
        </a>
      </div>
    @endforeach
  </div>
  <div class="my-10 p-3">
    {{$posts->links()}}
  </div>
  @else
    <p class="text-center">No hay publicaciones, sigue a alguien</p>
  @endif
@endsection
