@extends('layoutprincipal')

<!-- component -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-[#071e34] flex font-medium items-center justify-center h-screen">
 


 <section class="w-64 mx-auto bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
           
            <span class="text-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
              </svg>
            </span>
        </div>
        
        <div class="mt-6 w-fit mx-auto">
            <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/9734564-default-avatar-profile-icon-of-social-media-user-vetor.jpg" class="rounded-full w-28 " alt="profile picture" srcset="">
        </div>

       
        @auth
        <div class="mt-8 ">
            <p class="text-white font-bold text-2xl tracking-wide">{{auth()->user()->username}}</p>
        </div>
        @endauth




        @auth
        <div class="mt-8">
        <button id="toggleSidebarMobileSearch" type="button"
        class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <span class="_DVAfiyo21kM68EUVzEQ"></span>
        </button> 
        
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <li> <input class="text-white font-bold text-1xl tracking-wide" type="submit" value="Cerrar sesion"></li>
        </form>
        @endauth


        <p class="text-emerald-400 font-semibold mt-2.5" >
            
        </p>

        
        <div class="mt-3 text-white text-sm">

            <p class="text-white font-bold text-2xl tracking-wide"></p>

        </div>

        
    </section>

 </form>
</section>