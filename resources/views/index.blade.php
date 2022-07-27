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
    <nav class="bg-contrast text-links font-workSans md:text-sm lg:text-base">

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


    <main class="container">

        {{-- contenedor headliner --}}
        {{-- TODO: responve headliner --}}
        <div class="grid grid-cols-1 w-screen h-[30rem]  p-14 text-center bg-no-repeat bg-cover bg-center lg:h-[36rem]"
            style="background-image: url({{ 'images/students.png' }})">
            {{-- div del h1 --}}
            <div class=" w-[38rem] h-12 md:p-10 lg: pt-5 m-auto">
                <h1 class="text-white font-mavenPro font-semibold text-6xl w-[38rem] h-12 md:p-10 lg: pt-5">
                    Tus Memorias en un solo Sitio
                </h1>
            </div>
            {{-- div button --}}
            <div class="w-[10rem] h-[2.8rem] m-auto">
                <button class=" bg-button px-4 py-2 w-[10rem] h-[2.8rem] text-white" type="button">
                    Comenzar
                </button>
            </div>
        </div>

        {{-- div bar steps --}}
        <div class="container">

        </div>

    </main>






    <script src={{ 'js/app.js' }}></script>
</body>

</html>
