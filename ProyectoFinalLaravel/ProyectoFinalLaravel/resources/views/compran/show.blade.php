<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('compran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-6 py-3">
                                   ID
                                </th>
                                <th class="px-6 py-3">
                                    usuario_id
                                </th>
                                <th class="px-6 py-3">
                                productos_id
                                </th>
                                <th class="px-6 py-3">
                                unidades
                                </th>
                                <th class="px-6 py-3">
                                fecha
                                </th>

                            </tr>
                        </thead>
                    @foreach($compran as $c)
             

                    @endforeach

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <p>{{$c->id}}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p>{{$c->usuario_id}}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p>{{$c->productos_id}}</p>
                        </td>


                        <td class="px-6 py-4">
                            <p>{{$c->unidades}}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p>{{$c->fecha}}</p>
                        </td>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
