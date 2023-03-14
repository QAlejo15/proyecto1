@extends('layoutprincipal');

<section class="h-screen">
      
  <div class="flex xl:justify-center lg:justify-between justify-self-auto items-center flex-wrap h-full g-6"
 >
   <div
     class="grow-0 shrink-1 md:gap-6 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:items-center"
   >
     <img
       src="https://static1.educaedu-colombia.com/adjuntos/12/00/28/universidad-santo-tom-s---seccional-bucaramanga-002872_large.jpg"
       class="basis-full"
       alt="Sample image"
     />
   </div>
   <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
    
     <form action="/registro" method="POST">
       @csrf
     <div class="mb-6" >
     <a class= "text-xl mb-2 block uppercase text-gray-900 font-bold"> Registro de Usuario
     </a>
   </div>
       <!-- Nombre input -->
       <div class="mb-6">
         <label for="name" class="mb-2 block uppercase text-gray-900 font-bold">
          Nombre Completo
         </label>
         <input
           type="text"
           name="name"
           class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
           id="exampleFormControlInput2"
           placeholder="Nombre Completo"
         />
         @error('name')
         <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
             
         @enderror
       </div>
       <!-- nombre de usuario  input -->
       <div class="mb-6">
         <label for="usename" class="mb-2 block uppercase text-gray-900 font-bold">
          Nombre de Usuario
         </label>
         <input
           type="text"
           name="username"
           class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
           id="username"
           placeholder="Nombre de usuario"
         />
         @error('username')
         <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
             
         @enderror
       </div>
       <!-- Correo  input -->
       <div class="mb-6">
         <label for="email" class="mb-2 block uppercase text-gray-900 font-bold">
          E-mail
         </label>
         <input
           type="text"
           name="email"
           class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
           id="exampleFormControlInput2"
           placeholder="Correo Electrónico"
         />
         @error('email')
         <p class = "bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}
             
         @enderror
       </div>
       <!-- Contraseña  input -->
       <div class="mb-6">
         <label for="password" class="mb-2 block uppercase text-gray-900 font-bold">
          Contraseña
         </label>
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
       <div class="mb-6">
         <label for="password_confirmation" class="mb-2 block uppercase text-gray-900 font-bold">
          Confirmar Contraseña
         </label>
         <input
           type="password"
           name="pass"
           class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
           id="exampleFormControlInput2"
           placeholder="Repetir Contraseña"
         />
         
       </div>

        <div class="text-center lg:text-left">
        
         <!-- Botón--> 
        <input 
        type="submit" 
        value="Registrarse" 
        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
         
       </div>
     </form>
   </div>
 </div>
</div>
</section>