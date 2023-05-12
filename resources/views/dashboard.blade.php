@extends('layoutprincipal')

<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="pt-16 bg-blueGray-50">
<div class="w-full lg:w-4/12 px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative">
            <img alt="..." src="https://static.vecteezy.com/ti/vetor-gratis/p1/9734564-default-avatar-profile-icon-of-social-media-user-vetor.jpg" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
          </div>
        </div>
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                22
              </span>
              <span class="text-sm text-blueGray-400">Friends</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                10
              </span>
              <span class="text-sm text-blueGray-400">Photos</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                89
              </span>
              <span class="text-sm text-blueGray-400">Comments</span>
            </div>
          </div>
        </div>
      </div>
      @auth
          
      
      <div class="text-center mt-12">
        <p class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
            {{auth()->user()->username}}
        </p>
    @endauth

        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
        Direccion: {{auth()->user()->direccion}}
        </div>
        <div class="mb-2 text-blueGray-600">
            <i class="fas fa-genderless mr-2 text-lg text-blueGray-400"></i>
        Genero: {{auth()->user()->genero}}
          </div>
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
        Programa academico: {{auth()->user()->carrera}}
          </div>
        <div class="mb-2 text-blueGray-600">
            <i class="fas fa-phone fa-rotate-90 mr-2 text-lg text-blueGray-400"></i>
        Celular: {{auth()->user()->celular}}
          </div>
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
        Semestre: {{auth()->user()->semestre}}
        </div>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-9/12 px-4">
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                {{auth()->user()->presentacion}}
            </p>
            <a href="javascript:void(0);" class="font-normal text-pink-500">
              
            </a>

            
          
           <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route('feed')}}" class="mb-4 text-lg leading-relaxed text-blueGray-700" >
          Feed
         </a> 
              

           
             
          
            
           
    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-gray-100 p-4 rounded-lg">
<h1 class="text-2xl text-center text-gray-400 font-bold">PUBLICACIONES</h1>
              <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-4">
                <!-- Recorre los posts con un foreach -->
                
                @foreach($posts as $post)
                  <div class="bg-gray-100 p-4 rounded-lg">
                   
                    <a href="{{route('publicaciones.show', ['post' => $post, 'user'=>auth()->user()->username])}}">
                    <img src="{{ asset('uploads/' . $post->imagen) }}" alt="Imagen del post" class="w-full  object-cover rounded-lg">
                   
                   
                    <h2 class="text-xl font-bold mt-2">{{ $post->titulo }}</h2>
                    <p class="mt-1">{{ $post->descripcion }}</p>
                    </a>
                  </div>
                @endforeach
              
              </div>

<div class="paginador">

{{$posts->links('pagination::tailwind')}} 
</div>              
</div>
<div class="w-full px-4 text-center mt-20">
@auth
<form action="{{route('logout')}}" method="POST">
    @csrf
     <input class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="submit" value="Cerrar sesion">
    <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route('publicaciones.create')}}" class="mb-4 text-lg leading-relaxed text-blueGray-700" >
      Crear publicacion
    </a> 
</form>
@endauth
</div>

</section>