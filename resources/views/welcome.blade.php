<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="antialiased font-sans bg-gray-100 text-gray-900">
    <x-header></x-header>
    <x-slider></x-slider>

    <div class="w-full h-full max-w-7xl mx-auto lg:px-10 flex items-center justify-between px-4">
        <div class="py-16 w-full">
            <div class="text-center mb-16">
                <span class="uppercase font-normal text-sm  text-[#4CAF50]">¿quieres viajar?.</span>
                <h3 class="font-medium text-3xl text-[#2196F3] uppercase">Conoce todos nuestros tours</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-6">

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Machu Picchu">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR MACHU PICCHU</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">El tour consiste en una emocionante aventura por las maravillas de
                            Machu Picchu.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Cusco">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR CUSCO</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">Descubre la rica historia y cultura de la ciudad de Cusco en este
                            tour único.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Lima">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR LIMA</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">Explora la capital de Perú con su mezcla de tradición y
                            modernidad.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Arequipa">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR AREQUIPA</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">Visita la "Ciudad Blanca" y sus impresionantes paisajes
                            volcánicos.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Nazca">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR NAZCA</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">Admira las enigmáticas Líneas de Nazca desde las alturas.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/mapi.jpg') }}" alt="Tour Paracas">
                    <div class="p-4">
                        <h4 class="font-semibold text-xl text-gray-900">TOUR PARACAS</h4>
                        <p class="text-gray-600 mt-2 line-clamp-2">Explora la reserva natural de Paracas y sus bellas playas.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

<script></script>

</html>
