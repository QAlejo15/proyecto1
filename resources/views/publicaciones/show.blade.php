@extends('layoutprincipal')


@section('content')

<div class="bg-gray-100 p-4 rounded-2xl place-content-center mx-96">
  <div class="post-seccion">
    
  
      <div class="mb-6">
          <img src="{{ asset('uploads').'/'.$post->imagen }}" class="w-full rounded-lg" alt="Imagen del post">
      </div>
      <div class="mb-4">
          <div class="flex items-center">
              <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/9734564-default-avatar-profile-icon-of-social-media-user-vetor.jpg" class="w-8 h-8 rounded-full mr-2" alt="Imagen de perfil">
              <h1 class="text-lg font-semibold">{{ $post->user->username }}</h1>
          </div>
      </div>
      <div class="mb-4">
          <h1 class="text-2xl font-semibold">{{ $post->titulo }}</h1>
      </div>
      <div class="flex items-center mb-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Facebook_Like_button.svg/1024px-Facebook_Like_button.svg.png" class="w-8 h-8 rounded-full mr-2" alt="Imagen de perfil">
      
          <p class="text-gray-600">{{ $likesCount}}</p>
      </div>
      <div class="mb-4">
          <strong>Descripción:</strong>
          <p>{{ $post->descripcion }}</p>
      </div>
      <div class="mb-4">
          <strong>{{ $post->created_at->diffForHumans() }}</strong>
      </div>

      <form action="{{ route('like.store') }}" method="POST" class="mb-4">
          @csrf
          <input type="hidden" name="post_id" value="{{ $post->id }}">
          <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
              Me gusta
          </button>
      </form>

      @auth
          @if ($post->user_id == auth()->user()->id)
              <form method="POST" action="{{ route('publicaciones.destroy', $post) }}" class="mb-4">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                      Eliminar post
                  </button>
              </form>
          @endif
      @endauth
      <div class="mb-6">
        <form method="post" action="{{ route('comentarios.store') }}">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="mb-4">
                <textarea name="contenido" id="contenido" placeholder="Añade un comentario..." rows="3" class="w-full px-4 py-2 rounded-lg bg-gray-200"></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                    Comentar
                </button>
            </div>
        </form>
    </div>

    <div>
        <h1 class="mb-2 text-lg font-semibold">Comentarios</h1>
        <ul>
            @foreach ($comentarios as $comentario)
            <li class="flex items-center mb-2">
              <a  class="text-sm font-semibold" href="{{ route('dash', ['user' => $comentario->user]) }}">
              {{ $comentario->user->username }}
            </a>


               


                <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/9734564-default-avatar-profile-icon-of-social-media-user-vetor.jpg" class="w-8 h-8 rounded-full mr-2" alt="Imagen de perfil">
                <div>
                    
                    <p class="text-gray-600">{{ $comentario->contenido }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</div>

