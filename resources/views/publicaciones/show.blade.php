@extends('layoutprincipal')
<div class="bg-gray-100 p-4 rounded-2xl place-content-center mx-96	" >


<div class="mb-6 flex justify-center">
<div  class="post-seccion">
    
    <br>
    <div class="mb-6 flex justify-center">
    <img src="{{asset('uploads').'/'.$post->imagen}}" class="imagenPost rounded-2xl" width="300px" height="400px">
    </div>
    <br>
    <h1><strong>{{$post->titulo}}</strong></h1>
    <h1>Publicacion de : <strong>{{auth()->user()->username}}</strong></h1>
    <p>15 me gusta</p>
    <strong>Descripcion:</strong>
    <p>{{$post->descripcion}}</p>
    <strong>{{$post->created_at->diffForHumans()}}</strong>
</div>
</div>
<br>
<div class="mb-6 flex justify-center">
<form method="post" action="{{ route('comentarios.store') }}">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    
    <div>
        <label for="contenido">Añande un nuevo comentario</label><br><br>
        <textarea name="contenido" id="contenido" placeholder="Escribe un comentario" rows="4" cols="50"
        class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg "
        ></textarea>
    </div>
    <br>
    <div>
        <button type="submit"
        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
       
        >Agregar comentario</button>
    </div>
</form>
</div>

<h1 class="mb-6 flex justify-center font-family: ui-sans-serif text-lg"><strong>COMENTARIOS</strong></h1>
<div class=" mb-6 flex justify-center">

<br>
<br>

<ul class="w-96">
    @foreach ($post->comentario as $comment)
      <li  class="w-full border-b-2 border-white-100 border-opacity-100 py-4 dark:border-opacity-50">{{ $comment->contenido }}</li>
    @endforeach
  </ul>
</div>
</div>