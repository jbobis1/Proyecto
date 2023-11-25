<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-campo-texto>caracteristicas del </x-campo-texto>
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        @foreach ($team as $teams)
                            <tr>
                                <th class="px-6 py-3">
                                    ID
                                </th>
                                <th class="px-6 py-3">
                                    Nombre
                                </th>
                                <th class="px-6 py-3">
                                    Vueltas
                                </th>
                                <th class="px-6 py-3">
                                    Kms
                                </th>
                                <th class="px-6 py-3">
                                    Jornada
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $teams->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $teams->nombre }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $teams->vueltas }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $teams->kmsVuelta }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $teams->Jornada }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
