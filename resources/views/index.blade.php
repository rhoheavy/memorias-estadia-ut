<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio</title>
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
                <div class="ml-3 row-span-3"><img src={{ 'images/search.svg' }} alt="busqueda"></div>
            </div>
            <div class="grid grid-rows-2 grid-cols-1 p-2">
                <div class="row-span-2">Lee</div>
                <div class="ml-5 row-span-3"><img src={{ 'images/book.svg' }} alt="busqueda"></div>
            </div>
            <div class="grid grid-rows-2 grid-cols-1 p-2">
                <div class="row-span-2">Descarga</div>
                <div class="ml-7 row-span-3"><img src={{ 'images/download.svg' }} alt="busqueda"></div>
            </div>
        </div>


        {{-- <div class=" grid grid-cols-2 grid-rows-1">
            <div> <img class="flex md:hidden lg:flex pl-44" src={{ 'images/search.svg' }} alt="imagen"></div>
            <div>
                <h4 class="font-semibold font-workSans">Titulo</h4>
                <p class="hidden sm:flex text-xs md:visible font-light text-links  lg:text-sm">Lorem
                    ipsum
                    dolor
                    sit
                    amet consectetur
                    adipisicing elit.
                    Vitae sint
                    consequatur voluptates ipsum
                    harum.</p>
            </div>
        </div>
        <div class="grid grid-cols-2 grid-rows-1">
            <div> <img class="md:invisible lg:visible pl-44" src={{ 'images/book.svg' }} alt="imagen"></div>
            <div>
                <h4 class="font-semibold font-workSans">Titulo</h4>
                <p class="hidden sm:flex text-xs md:visible font-light text-links  lg:text-sm">Lorem
                    ipsum
                    dolor
                    sit
                    amet consectetur
                    adipisicing elit.
                    Vitae sint
                    consequatur voluptates ipsum
                    harum.</p>
            </div>
        </div>
        <div class="grid grid-cols-2 grid-rows-1">
            <div> <img class="md:invisible lg:visible pl-44" src={{ 'images/download.svg' }} alt="imagen"></div>
            <div>
                <h4 class="font-semibold font-workSans">Titulo</h4>
                <p class="hidden sm:flex text-xs md:visible font-light text-links  lg:text-sm">Lorem
                    ipsum
                    dolor
                    sit
                    amet consectetur
                    adipisicing elit.
                    Vitae sint
                    consequatur voluptates ipsum
                    harum.</p>
            </div>
        </div> --}}

        {{-- div informacion universidad --}}
        {{-- TODO: Fix padding imagen a la derecha --}}
        <div class="grid grid-cols-2 grid-rows-1 w-screen">
            <div class="p-40 grid">
                <div>
                    <h2 class="font-bold pb-10 font-mavenPro text-2xl ml-56">Universidad Tecnológica de Nayarit</h2>
                </div>
                <div>
                    <p class="font-light text-base w-[28rem] text-justify leading-relaxed mb-4">Justo
                        malesuada
                        tempor
                        lacus,
                        posuere.
                        Consequat
                        sagittis
                        sed tortor leo
                        id
                        scelerisque ac elit
                        curabitur. Dignissim et id at netus. Facilisi integer quis feugiat tempus. Cursus feugiat felis
                        etiam ipsum, in mauris sit eget habitant.

                        Vivamus et, est rutrum elit netus malesuada ac cursus. Augue mauris tellus quis cras quam magna.
                        Tincidunt condimentum magnis vitae magna blandit ornare felis, tortor non.</p>
                    <p class="font-light text-base w-[28rem] text-justify leading-relaxed">
                        Vivamus et, est rutrum elit netus malesuada ac cursus. Augue mauris tellus quis cras quam magna.
                        Tincidunt condimentum magnis vitae magna blandit ornare felis, tortor non.
                    </p>
                </div>
            </div>
            <div class="py-10">
                <img class="ml-40" src={{ 'images/girl_library.png' }} alt="">
            </div>
        </div>

        {{-- div barra numeros --}}
        {{-- TODO: Bars texto y espaciados --}}
        <div class="grid grid-cols-4 bg-bars w-screen h-[8rem]  py-8 px-16">
            <div>
                <h3 class="text-button">2324</h3>
                <p class="text-white">Sit fermentum, lectus eu aliquam ornare varius pharetra.</p>
            </div>
            <div>
                <h3 class="text-button">244</h3>
                <p class="text-white">Adipiscing lacus, vulputate ut pulvinar metus.</p>
            </div>
            <div>
                <h3 class="text-button">675</h3>
                <p class="text-white">Faucibus porta nunc gravida arcu.</p>
            </div>
            <div>
                <h3 class="text-button">10000</h3>
                <p class="text-white">Urna habitant ultricies erat vulputate eget.</p>
            </div>
        </div>

        {{-- seccion saber más --}}
        {{-- TODO: Centrar texto, barra verde y centrar imagenes, fix overlapping con footer --}}
        <div class="bg-bluish w-screen h-[18rem] grid grid-rows-2">
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
