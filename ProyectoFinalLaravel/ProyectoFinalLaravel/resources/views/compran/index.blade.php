<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-campo-texto>Listado de compras</x-campo-texto>
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 grid-rows-1 p-6  border-b">
                @foreach ($compran as $comprar)
                    <div
                        class="w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                Compras<br><br>
                                Usuario: {{ $comprar->n }}<br>
                                Productos: {{ $comprar->p }}<br>
                                Unidades: {{ $comprar->unidades }}<br>
                                Precio: {{ $comprar->c }}<br>
                                Fecha: {{ $comprar->created_at_formatted }}<br>
             
                            </h5>

                            </div>

      

            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
