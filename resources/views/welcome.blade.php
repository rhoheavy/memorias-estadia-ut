<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-4xl font-bold text-green-900 mt-10 text-center">
        Hello world!
    </h1>

    <h2 class="text-1xl text-center mt-5 text-blue-500 font-workSans font-light px-4">Lorem ipsum dolor, sit amet
        consectetur
        adipisicing
        elit. Omnis
        sapiente nulla sed
        provident recusandae! Vero.</h2>
    <h2 class="text-2xl text-center mt-5 text-orange-500 font-mavenPro font-bold uppercase px-4">Lorem ipsum dolor, sit
        amet
        consectetur
        adipisicing
        elit. Omnis
        sapiente nulla sed
        provident recusandae! Vero.</h2>

    <div class="container bg-main w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-links w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-contrast w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-contrast2 w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-button w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-contrast3 w-12 m-10 h-15 text-white text-center p-2">Main</div>
    <div class="container bg-bars w-12 m-10 h-15 text-white text-center p-2">Main</div>


    <div class="h-96 w-100 bg-no-repeat" style="background-image: url({{ 'images/students.png' }})"></div>
</body>

</html>
