@extends('layoutprincipal')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    
   
  
<div class="w-full lg:w-4/12 px-4 mx-auto" >
   
   

    <h1>NUEVA PUBLICACION</h1>
    
   
<form action="{{route("publicaciones.store")}}" method="post">
 @csrf 
   
    <p>Bienvenido  {{auth()->user()->username}} </p>
<!-- Nombre input -->
<div class="mb-6">
  <label for="name" class="mb-2 block uppercase text-gray-900 font-bold">
   Titulo
  </label>
  <input
    type="text"
    name="titulo"
    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
    id="exampleFormControlInput2"
    placeholder="Titulo de la publicacion"
  />
  @error('titulo')
  <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
      
      @enderror
      
      
</div>
<!-- nombre de usuario  input -->
<div class="mb-6">
  <label for="describe" class="mb-2 block uppercase text-gray-900 font-bold">
   Descripcion
  </label>
  <textarea
  type="text"
    name="descripcion"
    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
    id="describe"
    placeholder="Descripcion de la publicacion">
  
  </textarea>

  @error('descripcion')
  <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
      
  @enderror     
 

<div class="text-center">

  <input
  
  name="imagen"
  type="hidden"
  value="{{old('imagen')}}"
  >
</div>  

</div  class="text-center">
 <!-- Botón--> 
 <input 
 type="submit" 
 value="Subir" 
 class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" >

<div>


</div>    

</form>   
<div class=" mb-6 flex justify-center">
    <script>
        // Note that the name "myDropzone" is the camelized
        // id of the form.
        Dropzone.options.myDropzone = {
          // Configuration options go here
        };
        
      </script>
      <form enctype="multipart/form-data" method="POST" action="{{route('img.store')}}" class="dropzone" id="dropzone">
        @csrf
      </form>
      

  </div>
  
</div>