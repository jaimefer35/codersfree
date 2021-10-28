<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/foto1.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            
            <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-black font-bold text-4xl">Domina la tecnología web con CodFree</h1>
            <p class="text-black text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>
            
                            <!-- component -->
            <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>  
                    
                </div>
        
            </div>
        </div>

    </section>
    
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/laptops-593296_640.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, fugiat eligendi excepturi tempore earum omnis ernatur asperiores deleniti!</p>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/meeting-1245776_640.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, fugiat eligendi excepturi tempore earum omnis ernatur asperiores deleniti!</p>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/meeting-2284501_640.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Blog</h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, fugiat eligendi excepturi tempore earum omnis ernatur asperiores deleniti!</p>

                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/office-1209640_640.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Desarrollo Web</h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, fugiat eligendi excepturi tempore earum omnis ernatur asperiores deleniti!</p>

                </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        
        <div class="flex justify-center mt-4">
                <a href="{{route('courses.index')}}" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Catalogo de Cursos
                </a> 
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Ultimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6 ">Trabajo Duro para subir cursos</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>


</x-app-layout>


