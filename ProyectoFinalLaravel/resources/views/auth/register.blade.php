<!doctype html>
<html lang="en">

<head>
  <title>Registrar</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css')}} ">
    
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
  
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <div class="text-center">
                  <img src="{{ asset('asset/07e4bd44143e48c59a99771d4d5d6649.png')}}"
                    style="width: 185px;" alt="logo">
               
                </div>
         
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

   
        <form method="POST" action="{{ route('register') }}">
            @csrf

            

            <!-- Name -->

            
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            
       

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estas registrado?') }}
                </a>
                

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
               
           </div>
           </div></div></div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <h4 class="mb-4">M&W</h4>
                <p class="small mb-0">¡Regístrate en M&W y abre la puerta a un mundo de tecnología de vanguardia! Crear una cuenta es fácil y rápido. Solo necesitas proporcionar algunos detalles básicos para personalizar tu experiencia de compra y acceder a ofertas exclusivas.

Al registrarte, podrás realizar un seguimiento de tus pedidos, guardar tus productos favoritos y recibir recomendaciones personalizadas. Además, serás el primero en enterarte de nuestras emocionantes promociones y lanzamientos de productos.

En M&W, valoramos tu privacidad y seguridad. Puedes estar tranquilo sabiendo que tus datos están protegidos. Nuestro equipo de soporte está listo para ayudarte en cualquier momento, asegurando que tu experiencia de compra sea sin complicaciones.

Únete a la comunidad M&W y descubre la comodidad de comprar tecnología de alta calidad. ¡Regístrate ahora y sé parte de nuestra emocionante travesía tecnológica!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
    </x-auth-card>
</x-guest-layout>

 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>