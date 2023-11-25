<!doctype html>
<html lang="en">

<head>
  <title>Admin Usuarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css')}} ">


    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <x-campo-texto>Administracion de Prodductos</x-campo-texto>
            </h2>
        </x-slot>
        <div class="py-12 bg-blue-100">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="grid grid-cols-3 grid-rows-2">
                        </div>
                        <div class="table-responsive">
                        <table  class="table table-bordered table-dark">
  <thead>
    <tr>
        
                                    <th cope="col">
                                   Id
                                    </th>
                                    <th cope="col">
                                    Nombre
                                    </th>
                      
                                    <th cope="col">
                                    Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carrera as $u)
                                    <tr>
                                        <td class="px-6 py-4">
                                            {{ $u->id }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $u->name }}
                                        </td>
             
                                        <td class="px-6 py-4">
                                            @if (Auth::user()->admin)
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form class="inline-block"
                                                        action={{ route('circuito.destroy', ['circuito' => $u->id]) }}
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    @endif
                                                    <a href={{ route('circuito.edit', ['circuito' => $u->id]) }} ><button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button></a>
                                                </div>
                                      
                                           
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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