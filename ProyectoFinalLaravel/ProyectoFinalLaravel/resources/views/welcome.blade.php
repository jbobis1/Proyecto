<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-campo-texto>Bienvenido</x-campo-texto>
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Bienvenido a M&W
                        </h3>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-black">A que nos dedicamos</h3>
                        <p class="my-4 font-light">Pagina dedicada a la venta de Productos Tecnologicos</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class=" w-12 h-12"
                            src="https://img.pccomponentes.com/articles/1075/10750966/1926-xiaomi-redmi-12-8-256gb-negro-medianoche-libre.jpg" width="300" height="300"
                            alt="profile picture">
                        <div class="space-y-0.5 font-medium dark:text-black text-left">
                        
                        </div>
                    </figcaption>
                </figure>
       

                <figure
                    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-black">Quienes Somos</h3>
                        <p class="my-4 font-light">Toda la pagina gestidonada por Javier
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class=" w-12 h-12"
                            src="https://s1.eestatic.com/2023/02/01/el-cultural/letras/738186716_230572915_1706x960.jpg" width="500" height="500"
                            alt="profile picture">
       
                    </figcaption>
            </div>
        </div>
    </div>
</x-app-layout>
