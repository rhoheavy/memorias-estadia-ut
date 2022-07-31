<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universidad Tecnológica de Nayarit - Página de Inicio</title>
    <link rel="home icon" href={{ 'images/logout.ico' }} type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>

    {{-- menu de navegación --}}
    <nav class="bg-contrast text-links font-workSans w-screen md:text-sm lg:text-base">

        <div class="pl-10 pr-20 mx-auto">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    {{-- logo --}}
                    <img class="mr-10 py-4" width="50" src={{ 'images/logout.png' }} alt="logo ut">

                    {{-- primary nav --}}
                    <div class="hidden md:flex">
                        <img class="md:hidden lg:flex" src={{ 'images/ep_message.svg' }} alt="message-svg">
                        <div class="ml-2 mr-5">info@utnay.edu.mx</div>
                        <img class="md:hidden lg:flex" src={{ 'images/clarity_mobile-phone-line.svg' }} alt="phone-svg">
                        <div class="ml-2">+52 (311) 211 9800</div>
                    </div>
                </div>
                {{-- secondary nav --}}
                <div class="hidden md:flex ">
                    <a href="#">Sobre Nosotros</a>
                    <a class="ml-5" href="#">Iniciar Sesión</a>
                </div>

                {{-- button movil --}}
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- mobile menu --}}
            <div class="mobile-menu hidden   md:hidden text-right">
                <a class="block py-2 px-4 text-sm hover:bg-gray-600" href="#">Iniciar Sesión</a>
                <a class="block py-2 px-4 text-sm hover:bg-gray-600" href="#">Sobre Nosotros</a>
            </div>
        </div>
    </nav>

    {{-- contenido --}}


    <main class="">

        {{-- TODO: Tamaños grandes md: --}}
        {{-- div headliner --}}
        <div class="grid h-[30rem] text-center justify-center bg-no-repeat bg-cover bg-center "
            style="background-image: url({{ 'images/students2.png' }})">
            {{-- div del h1 --}}
            <div class=" w-[24rem] h-auto pt-20 grid-row-start">
                <h1 class="text-white font-mavenPro font-semibold text-4xl ">
                    Tus Memorias en un solo Sitio
                </h1>
            </div>
            {{-- div button --}}
            <div class="w-[10rem] h-[2.8rem] justify-self-center row-span-6">
                <button class=" bg-button px-4 py-2 w-[10rem] h-[2.8rem] text-white rounded" type="button">
                    Comenzar
                </button>
            </div>
        </div>

        {{-- div bar steps --}}
        {{-- TODO: Tamaño md: mostrar texto --}}

        <div class="grid grid-cols-3 bg-contrast2 h-[10rem] w-screen text-white p-5 text-center">
            <div class="grid grid-rows-2 grid-cols-1 p-2">
                <div class="row-span-2">Busca</div>
                <div class=" row-span-3 justify-self-center"><img src={{ 'images/search.svg' }} alt="busqueda"></div>
            </div>
            <div class="grid grid-rows-2 grid-cols-1 p-2">
                <div class="row-span-2">Lee</div>
                <div class=" row-span-3 justify-self-center"><img src={{ 'images/book.svg' }} alt="busqueda"></div>
            </div>
            <div class="grid grid-rows-2 grid-cols-1 p-2">
                <div class="row-span-2">Descarga</div>
                <div class="justify-self-center row-span-3"><img src={{ 'images/download.svg' }} alt="busqueda"></div>
            </div>
        </div>

        {{-- div informacion universidad --}}
        {{-- TODO: Tamaños md: imagen --}}

        <div class="grid w-screen h-[32rem]">
            <div class="px-10">
                <div class="pt-16 font-semibold text-center pb-10">Universidad Tecnológica de Nayarit</div>
                <div class="font-extralight text-justify">
                    <p class="pb-4">Justo malesuada tempor lacus, posuere. Consequat sagittis sed tortor leo id
                        scelerisque ac elit
                        curabitur. Dignissim et id at netus. Facilisi integer quis feugiat tempus. Cursus feugiat felis
                        etiam ipsum, in mauris sit eget habitant.</p>
                    <p>Vivamus et, est rutrum elit netus malesuada ac cursus. Augue mauris tellus quis cras quam magna.
                        Tincidunt condimentum magnis vitae magna blandit ornare felis, tortor non.</p>
                </div>
            </div>
            <div><img class="hidden" src={{ 'images/girl_library.png' }} alt=""></div>
        </div>

        {{-- div barra numeros --}}
        {{-- TODO: Tamaños md: --}}
        <div class="grid grid-cols-4 gap-x-2 bg-bars w-screen h-[8rem] p-10">
            <div>
                <h3 class="text-button">12</h3>
                <p class="text-white text-xs font-light">Carreras</p>
            </div>
            <div>
                <h3 class="text-button">20</h3>
                <p class="text-white text-xs font-light">Convenios</p>
            </div>
            <div>
                <h3 class="text-button">+300</h3>
                <p class="text-white text-xs font-light">Estudiantes</p>
            </div>
            <div>
                <h3 class="text-button">+5000</h3>
                <p class="text-white text-xs font-light">Egresados</p>
            </div>
        </div>

        {{-- seccion saber más --}}
        {{-- TODO: Centrar texto, barra verde y centrar imagenes, fix overlapping con footer --}}
        <div class="grid grid-rows-2 bg-bluish w-screen h-[18rem] p-10 text-center">
            <div class="">
                <h4>Para saber más</h4>
            </div>
            {{-- <div class="grid grid-cols-3">
                <img src={{ 'images/imageSep.png' }} alt="sep">
                <img src={{ 'images/imageNay.png' }} alt="nay">
                <img src={{ 'images/imageSocial.png' }} alt="social">
            </div> --}}
        </div>

        {{-- footer --}}
        {{-- TODO: Posicionar textos, fuentes y tamaños, input form y texto copyright --}}

        <div class="bg-contrast2 w-screen h-[15rem] grid grid-cols-2">
            <div>
                <p class="text-white"> Mantente al tanto de las actualizaciones</p>
            </div>
            <div>
                <input type="email" name="" id="">
            </div>
            <div>
                <p class="text-white">© 2022 Universidad Tecnológica de Nayarit. Derechos Reservados.</p>
            </div>
        </div>

    </main>






    <script src={{ 'js/app.js' }}></script>
</body>

</html>
