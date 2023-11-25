
<!doctype html>
<html lang="en">

<head>
  <title>Categoria</title>
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
                <li class="breadcrumb-item active" aria-current="page">Categoria</li>
            </ol>
        </nav>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 grid-rows-1 p-6  border-b">
                @foreach ($teams as $team)
                    <div
                        class="w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-5">
                     
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                            
                                <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $team->image_cat }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $team->image_cat }}">
                               
                            
                            </h5>
                            <h5> Tipo: {{ $team->tipo }}</h5>

                            <a href={{ route('equipo.show', ['equipo' => $team->id]) }}>
                                <br>
                                <button type="submit" class="btn btn-info">Mostrar</button></a>

                            </form>

                            @if (Auth::user()->admin)
                                <a href={{ route('equipo.edit', ['equipo' => $team->id]) }}>

                                <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button></a>


                                <form class="inline-block" action={{ route('equipo.destroy', ['equipo' => $team->id]) }}
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                        
                        
                        </form>
                @endif

                </div>
            </div>
            @endforeach
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
