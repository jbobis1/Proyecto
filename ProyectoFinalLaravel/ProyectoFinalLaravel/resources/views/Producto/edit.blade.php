
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
                        <label for="text"
                            class="details mb-2 text-sm font-medium text-gray-900 dark:text-black">details</label>
                        <input type="text" id="details" value={{ $producto->details }} name="details"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label for="category_id"
                            class="price mb-2 text-sm font-medium text-gray-900 dark:text-black">Id Categoria</label>
                        <input type="number" id="category_id" value={{ $producto->category_id }} name="category_id"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('category_id')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
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
