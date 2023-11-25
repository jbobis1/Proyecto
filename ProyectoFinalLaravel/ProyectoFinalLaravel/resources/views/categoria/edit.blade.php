

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action={{ route('equipo.update', ['equipo' => $categoria->id]) }}
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Tipo</label>
                        <input type="text" id="tipo" value={{ $categoria->tipo }} name="tipo"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('nombre')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
          

                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Marca</label>
                        <input type="text" id="marca" value={{ $categoria->marca }} name="marca"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('marca')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="image_cat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto</label>

                        <input type="file" id="image_cat" value="{{$categoria->image_cat}}"  name="image_cat"
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
