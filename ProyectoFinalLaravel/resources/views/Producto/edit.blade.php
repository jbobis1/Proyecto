
<!doctype html>
<html lang="en">

<head>
  <title>Editar Producto</title>
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
                <li class="breadcrumb-item"><a href="/shop">Tienda</a></li>
                <li class="breadcrumb-item"><a href="/producto">Producto</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Producto</li>
            </ol>
        </h2>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   
    <div class="card" style="margin-bottom: 20px; height: auto;">
                <form method="POST" action={{ route('circuito.update', ['circuito' => $producto->id]) }}
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre</label>
                        <input type="text" id="name" value={{ $producto->name }} name="name"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('nombre')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
          

                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="slug mb-2 text-sm font-medium text-gray-900 dark:text-black">Modelo</label>
                        <input type="text" id="slug" value={{ $producto->slug }} name="slug"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('slug')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="p-6 bg-white border-gray-200">
    <label for="details" class="mb-2 text-sm font-medium text-gray-900 dark:text-black">Detalles</label>
    <textarea name="details"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 resize-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $producto->details }}</textarea>

    @error('details')
        <p>{{ $message }}</p>
    @enderror
</div>
                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="price mb-2 text-sm font-medium text-gray-900 dark:text-black">Precio</label>
                        <input type="number" id="price" value={{ $producto->price }} name="price"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('price')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="shipping_cost"
                            class="price mb-2 text-sm font-medium text-gray-900 dark:text-black">Gasto de Envio</label>
                        <input type="number" id="shipping_cost" value={{ $producto->shipping_cost }} name="shipping_cost"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('price')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="description"
                            class="details mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
                        <input type="text" id="description" value={{ $producto->description }} name="description"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('description')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                    <select name="category_id" id="category_id" class="form-control">
            @foreach ($cate as $u)
            <option value="{{ $u->p }}" {{ $producto->category_id == $u->p ? 'selected' : '' }}>{{ $u->p }}</option>
                @endforeach
                <!-- Agrega más opciones según tus tipos de categorías -->
            </select>
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="image_path"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto</label>

                        <input type="file" value="{{$producto->image_path}}" id="image_path" name="image_path"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                  

                    <div class="p-6 bg-white border-gray-200">
                        <button type="submit"
                            class="px-1 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
                    </div>
                </form>
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