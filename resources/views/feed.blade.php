@extends('layoutprincipal')


<div class="container mx-auto px-4 mt-6">
    <h1 class="text-2xl font-bold mb-4">Usuarios y sus últimas publicaciones</h1>
    
    <div class="grid grid-cols-2 gap-4">
        @foreach($users as $user)
        <div class="bg-white rounded-lg overflow-hidden shadow-md p-4">
            <h2 class="text-lg font-semibold mb-2">{{ $user->name }}</h2>
            
            @if($user->lastPost)
            <div>
                <h3 class="text-md font-semibold mb-1">{{ $user->lastPost->titulo }}</h3>
                <p class="text-sm text-gray-600 mb-2">{{ $user->lastPost->created_at->diffForHumans() }}</p>
                <p>{{ $user->lastPost->descripcion }}</p>

                
                <h4>Foto:</h4>
                
               
               <img src="{{ asset('uploads/' . $user->lastPost->imagen) }}"   class="imagenPost rounded-2xl" width="200px" height="200px"alt="Foto del último post">
                <div class="mt-4">
                    <h4 class="text-sm font-medium mb-1">Comentarios:</h4>
                    @foreach ($user->lastPost->comentario as $comment)
                   <p>{{ $comment->contenido }}</p>
                   @endforeach
                   
                </div>
                
                <div class="mt-4">
                    @if ($user->lastPost)
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Facebook_Like_button.svg/1024px-Facebook_Like_button.svg.png" class="w-8 h-8 rounded-full mr-2" alt="Imagen de perfil">

                    <p>{{ $user->lastPost->likes->count() }} Likes</p>
                    @endif
                </div>
            </div>
            @else
            <p>No hay publicaciones</p>
            @endif
        </div>
        @endforeach
    </div>
</div>

