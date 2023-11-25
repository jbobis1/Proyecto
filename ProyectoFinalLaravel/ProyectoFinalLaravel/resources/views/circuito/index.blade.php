<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-campo-texto>Listado de Circuitos</x-campo-texto>
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="grid grid-cols-3 grid-rows-1 p-6  border-b">
                @foreach ($carrera as $c)
                    <div
                        class="w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Equipo<br>
                            Nombre: {{ $c->nombre }}<br>

                        </h5>


                        <a href={{ route('circuito.show', ['circuito' => $c->id]) }}>
                            <br>
                            <button type="submit"
                                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                                Mostrar</button></a>

                        @if (Auth::user()->admin)
                            <a href={{ route('circuito.edit', ['circuito' => $c->id]) }}>

                                <button type="submit"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Editar</button></a>





                            <form class="inline-block" action={{ route('circuito.destroy', ['circuito' => $c->id]) }}
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-400 dark:text-red-400 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-900">Borrar</button>
                    </div>
                    </form>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
