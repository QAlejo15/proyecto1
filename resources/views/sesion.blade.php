@extends('layoutprincipal')


<section class="h-screen">
      
     <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
    >
      <div
        class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
      >
        <img
          src="https://yt3.googleusercontent.com/ytc/AL5GRJVJoNvQ6ODtv48QRs-i2nMK4ph3wuHwukQU5Q08=s900-c-k-c0x00ffffff-no-rj"
          class="basis-full"
          alt="Sample image"
        />
      </div>
      <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
        <form action="{{route('sesion')}}"  method="POST">
          @csrf
          
          @if(session('mensaje'))
            <p class ="bg-red-600 text-white my-2 text-sm p-2 text-center" >
            {{session('mensaje')}}
            </p>
          @endif

        <div class="mb-6" >
        <a class= "text-xl font-semibold mt-2 pt-1 mb-0"> Iniciar Sesión
        </a>
      </div>
          <!-- Email input -->
          <div class="mb-6">
            <input
              type="text"
              name='email'
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Correo Electrónico"
            />
            @error('email')
            <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
                
            @enderror
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input
              type="password"
              name="password"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Contraseña"
            />
            @error('password')
            <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
                
            @enderror
          </div>

          <div class="flex justify-between items-center mb-6">
            <div class="form-group form-check">
              <input
                type="checkbox"
                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                id="exampleCheck2"
              />
              <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                >Recordarme</label
              >
            </div>
            <a href="#!" class="text-gray-800">Olvidaste tu contraseña</a>
          </div>

          <div class="text-center lg:text-left">
            <input
              type="submit"
              value="Iniciar sesion"
              class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
           
            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
              ¿Aún no te registras?
              <a
                href="#!"
                class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                >click aquí</a
              >
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>