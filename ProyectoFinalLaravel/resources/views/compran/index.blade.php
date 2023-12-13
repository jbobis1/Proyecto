
<!doctype html>
<html lang="en">

<head>
  <title>Compran</title>
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
                <li class="breadcrumb-item active" aria-current="page">Compran</li>
            </ol>
        </nav>



        {{-- Mostrar detalles de la categoría --}}


{{ $compran->links() }}

        <div class="col-lg-12">
    <div class="card" style="margin-bottom: 20px; height: auto;">
  
                @foreach ($compran as $comprar)
                <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Usuario</th>
      <th scope="col">Productos</th>
      <th scope="col">Unidades</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td> {{ $comprar->n }}</td>
      <td> {{ $comprar->p }}</td>
      <td> {{ $comprar->unidades }}</td>
      <td> {{ $comprar->c * $comprar->unidades }}</td>
      <td> {{ $comprar->created_at_formatted  }}</td>
    </tr>    

            @endforeach
      
            </div>
        </div>
        </div>
     
</table>
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