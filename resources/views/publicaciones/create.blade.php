@extends('layoutprincipal')


<div class="mx-auto px-4 mt-6">
  
  <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden shadow-md">
    <div class="p-4">
      <h1 class="text-2xl font-bold mb-4">NUEVA PUBLICACIÓN</h1>
      <label for="imagen" class="block text-gray-700 font-medium mb-2">Seleccionar imagen</label>
      <br>
      <div class="mb-6 flex justify-center">
        <form enctype="multipart/form-data" method="POST" action="{{ route('img.store') }}" class="dropzone" id="dropzone">
            @csrf
        </form>
        @error('imagen')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
    </div>
      <form action="{{ route('publicaciones.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="titulo" class="block text-gray-700 font-medium mb-2">Título</label>
          <input type="text" name="titulo" id="titulo" class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Título de la publicación">
          @error('titulo')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="descripcion" class="block text-gray-700 font-medium mb-2">Descripción</label>
          <textarea name="descripcion" id="descripcion" rows="3" class="w-full py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Descripción de la publicación"></textarea>
          @error('descripcion')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        
      <div class="text-center">
        <input name="imagen" type="hidden" value="{{ old('imagen') }}">
    </div>


       
        <div class="mt-6">
          <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Subir publicación</button>
        </div>
      </form>
    </div>
  </div>
</div>
    
</div>


@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css">
@endpush

@push('scripts')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
    Dropzone.options.dropzone = {
        // Configuration options go here
    };
</script>
@endpush
