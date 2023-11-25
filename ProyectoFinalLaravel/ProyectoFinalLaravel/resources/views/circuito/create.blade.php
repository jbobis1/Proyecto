<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12 bg-blue-100">
        <div class="max-w-2xl mx-auto sm:px-4 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action={{ route('circuito.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 bg-white border-red-200">
                        <label for="id"
                            class="block mb-2 text-sm font-medium text-red-600 dark:text-black">Id</label>
                        <input type="number" id="id" name="id" aria-describedby="helper-text-explanation"
                            class="bg-red-50 border border-red-300 text-red-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autofocus autocomplete="id">
                            @error('id')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="p-6 bg-white border-red-200">
                        <label for="nombre"
                            class="block mb-2 text-sm font-medium text-red-600 dark:text-black">Nombre</label>
                        <input type="text" id="nombre" name="nombre" aria-describedby="helper-text-explanation"
                            class="bg-red-50 border border-red-300 text-red-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autofocus autocomplete="nombre">
                            @error('nombre')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="p-6 bg-white border-gray-200">
                        <label for="slug"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Slug</label>
                        <input type="text" id="slug" name="slug" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            autofocus autocomplete="edad">
                            @error('slug')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="p-6 bg-white border-gray-200">
                        <label for="details"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Detalles</label>
                        <input type="text" id="details" name="details" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('details')
                            <p>{{$message}}</p>
                            @enderror
                    </div>
                    <div class="p-6 bg-white border-gray-200">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Precio</label>
                        <input type="number" id="price" name="price" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('price')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="shipping_cost"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Coste de Envio</label>
                        <input type="number" id="shipping_cost" name="shipping_cost" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('shipping_cost')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Descricion</label>
                        <input type="text" id="description" name="description" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('description')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="category_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">ID Categoria</label>
                        <input type="number" id="category_id" name="category_id" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('category_id')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="brand_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">ID Brand</label>
                        <input type="number" id="brand_id" name="brand_id" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             autofocus autocomplete="edad">
                            @error('brand_id')
                            <p>{{$message}}</p>
                            @enderror
                    </div>

             

                    <div class="grid grid-cols-2 grid-rows-1" style="display: flex;flex-direction: row;align-items: center;">
                        <div class="p-6 bg-white border-gray-200">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="image_path">Imagen</label>
                            <input
                                class="block mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="image_path" name="image_path" type="file" autofocus autocomplete="personaje">
                                @error('image_path')
                                <p>{{$message}}</p>
                                @enderror
                        </div>

                        <button type="submit" class="p-3 w-60 text-sm font-medium text-center text-white bg-gphp artisanen-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fas fa-pencil-alt"></i>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
