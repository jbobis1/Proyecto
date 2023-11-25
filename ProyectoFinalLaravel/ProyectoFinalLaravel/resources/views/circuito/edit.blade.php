<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Carrrea') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action={{ route('circuito.update', ['circuito' => $circuito->id]) }}
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre</label>
                        <input type="text" id="nombre" value={{ $circuito->nombre }} name="nombre"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('nombre')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">vueltas</label>
                        <input type="text" id="vueltas" value={{ $circuito->vueltas }} name="vueltas"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('vueltas')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Jornada</label>
                        <input type="text" id="Jornada" value={{ $circuito->Jornada }} name="Jornada"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('Jornada')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <label for="text"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">kmsVuelta</label>
                        <input type="text" id="kmsVuelta" value={{ $circuito->kmsVuelta }} name="kmsVuelta"
                            aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('kmsVuelta')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="fotoCircuit"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Foto</label>

                        <input type="file" value="{{ $circuito->fotoCircuit }}" id="fotoCircuit" name="fotoCircuit"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="p-6 bg-white border-gray-200">
                        <button type="submit"
                            class="px-1 py-1 text-sm font-medium text-center text-black bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
