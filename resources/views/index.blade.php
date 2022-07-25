<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Inicio</title>
    @vite('resources/css/app.css')
</head>

<body>

    <nav class="bg-contrast text-links">

        <div class="pl-10 pr-20 border border-red-400 mx-auto">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img class="mr-10 py-4" width="50" src={{ 'images/logout.png' }} alt="logo ut">
                    <img src={{ 'images/ep_message.svg' }} alt="message-svg">
                    <div class="ml-2 mr-5">info@utnay.edu.mx</div>
                    <img src={{ 'images/clarity_mobile-phone-line.svg' }} alt="phone-svg">
                    <div class="ml-2">+52 (311) 211 9800</div>
                </div>
                <div>
                    <a href="#">Sobre Nosotros</a>
                    <a class="ml-5" href="#">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </nav>



</body>

</html>
