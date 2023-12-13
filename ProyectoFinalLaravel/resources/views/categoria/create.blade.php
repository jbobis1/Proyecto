
<!doctype html>
<html lang="en">

<head>
  <title>Nueva Categoria</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css')}} ">

<x-app-layout>
    <x-slot name="header">

   
    </x-slot>
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/categoria">Categoria</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Categoria</li>
            </ol>
     




        <div class="max-w-2xl mx-auto sm:px-4 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action={{ route('categoria.store') }} enctype="multipart/form-data">
                    @csrf
              
                    <div class="p-6 bg-white border-red-200">
                        <label for="tipo"
                            class="block mb-2 text-sm font-medium text-red-600 dark:text-black">Tipo</label>
                        <input type="text" id="tipo" name="tipo" aria-describedby="helper-text-explanation"
                            class="bg-red-50 border border-red-300 text-red-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autofocus autocomplete="nombre">
                        @error('tipo')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
           

                    <div class="p-6 bg-white border-gray-200">
                        <label for="marca"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Marca</label>
                        <input type="text" id="marca" name="marca" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autofocus autocomplete="nombre">
                        @error('marca')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="grid grid-cols-2 grid-rows-1"
                        style="display: flex;flex-direction: row;align-items: center;">
                        <div class="p-6 bg-white border-gray-200">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="image_cat">image_cat</label>
                            <input
                                class="block mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="image_cat" name="image_cat" type="file"
                                autofocus autocomplete="personaje">
                            @error('image_cat')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="p-6 bg-white border-gray-200">
                    <button type="submit"
                            class="p-3 w-60 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i
                                class="fas fa-pencil-alt"></i>Crear</button>
                                </div></form>
            </div>
        </div>
    </div>
</x-app-layout>
 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>