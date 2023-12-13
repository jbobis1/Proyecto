<!doctype html>
<html lang="en">

<head>

  <title>Editar Productos</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css')}} ">


    <x-app-layout>
    @section('content')

  
 @if(session()->has('success_msg'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session()->get('success_msg') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div>
 @endif
 @if(session()->has('alert_msg'))
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
         {{ session()->get('alert_msg') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div>
 @endif
 @if(count($errors) > 0)
     @foreach($errors0>all() as $error)
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ $error }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>
     @endforeach
 @endif
        <x-slot name="header">
    
        </x-slot>
        <div class="container" style="margin-top: 80px">
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item"><a href="/shop">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Producto</li>
            </ol>
 
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                        <div class="grid grid-cols-3 grid-rows-2">
                        </div>
                        <div class="table-responsive">
                        <table class="table">
  <thead class="thead-dark">
    <tr>
        
                                 
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