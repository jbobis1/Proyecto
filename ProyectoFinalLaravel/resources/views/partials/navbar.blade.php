<!doctype html>
<html lang="en">

<head>
  <title>Carrito</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css')}} ">


<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
    


    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            M&W
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

                  <!-- Navigation Links -->
                  @auth
     
                  <body style="background-color:white;">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

               
                    <x-nav-link :href="route('shop')" :active="request()->routeIs('shop')" class=" text-white">
                        {{ __('Productos') }}

                    </x-nav-link>
                </div>
           




                @if(Auth::user()->admin)
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <x-nav-link :href="route('producto.index')" :active="request()->routeIs('producto.index')" class=" text-white" >
                        {{ __('Editar Productos') }}
                    </x-nav-link>
                </div>

          
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <x-nav-link :href="route('producto.create')" :active="request()->routeIs('producto.create')" class=" text-white" >
                        {{ __('Nuevo Productos') }}
                    </x-nav-link>
                </div>

                @endif

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

<x-nav-link :href="route('categoria.index')" :active="request()->routeIs('categoria.index')" class=" text-white">
    {{ __('Categoria') }}
</x-nav-link>
</div>

 @if(Auth::user()->admin)
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <x-nav-link :href="route('categoria.create')" :active="request()->routeIs('categoria.create')" class=" text-white" >
                        {{ __('Nuevo Categoria') }}
                    </x-nav-link>
                </div>
                @endif

       
                @if(!Auth::user()->admin)
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <x-nav-link :href="route('compran.index')" :active="request()->routeIs('compran.index')" class=" text-white">
                        {{ __('Compras') }}
                    </x-nav-link>
                </div>
                @endif

                @if(Auth::user()->admin)
            
       
              
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')" class=" text-white">
                        {{ __('Administracion de usuarios') }}
                    </x-nav-link>
                </div>
               
            </div>
            @endif
        @endauth

 
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white">TIENDA</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"
                    >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

            
                    

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                        </div>
                    </div>
            
                  
                    
                    @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-white hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Cerrar Perfil') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="{{ route('login') }}" class="text-sm dark:text-white underline  text-white">Log in</a>
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm  dark:text-white underline  text-black-600">Register</a>
            @endauth
                </li>
     </nav>

 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
