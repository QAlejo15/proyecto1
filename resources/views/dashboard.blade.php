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
           
    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w-full px-4 text-center mt-20">
@auth
<form action="{{route('logout')}}" method="POST">
    @csrf
     <input class="inline-block rounded bg-danger px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)]" type="submit" value="Cerrar sesion">
</form>
@endauth
</div>
<footer class="relative  pt-8 pb-6 mt-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Made with <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
        </div>
      </div>
    </div>
  </div>
</footer>
</section>