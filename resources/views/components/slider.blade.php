<div class="relative w-full h-[500px] overflow-hidden">
    <div class="flex transition-transform duration-500 ease-in-out" id="slides">
        <div class="relative w-full h-[500px] flex-shrink-0">
            <img src="{{ asset('images/montana_colores.jpeg') }}" alt="Descripción de la imagen"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="w-full h-full max-w-7xl mx-auto lg:px-10 flex items-center justify-between px-4">
                    <div class="text-center text-white px-20">
                        <h2 class="text-3xl font-bold mb-4">TOUR MONTAÑA DE COLORES</h2>
                        <p class="text-lg mb-6">Descubre la Montaña de los 7 Colores en Cusco, un tesoro natural donde
                            la
                            naturaleza pintó un paisaje único, convirtiéndolo en uno de los destinos más emblemáticos de
                            Perú.
                        </p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Saber
                            más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-[500px] flex-shrink-0">
            <img src="{{ asset('images/cusco_plasa.jpeg') }}" alt="Descripción de la imagen"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="w-full h-full max-w-7xl mx-auto lg:px-10 flex items-center justify-between px-4">
                    <div class="text-center text-white px-20">
                        <h2 class="text-3xl font-bold mb-4">TOUR PLASA DE ARMAS</h2>
                        <p class="text-lg mb-6">Descubre la Montaña de los 7 Colores en Cusco, un tesoro natural donde
                            la
                            naturaleza pintó un paisaje único, convirtiéndolo en uno de los destinos más emblemáticos de
                            Perú.
                        </p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Saber
                            más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative w-full h-[500px] flex-shrink-0">
            <img src="{{ asset('images/mapi.jpg') }}" alt="Descripción de la imagen"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="w-full h-full max-w-7xl mx-auto lg:px-10 flex items-center justify-between px-4">
                    <div class="text-center text-white px-20">
                        <h2 class="text-3xl font-bold mb-4">TOUR MACHUPICCHU</h2>
                        <p class="text-lg mb-6">Descubre la Montaña de los 7 Colores en Cusco, un tesoro natural donde
                            la
                            naturaleza pintó un paisaje único, convirtiéndolo en uno de los destinos más emblemáticos de
                            Perú.
                        </p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Saber
                            más</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Controles de navegación -->
    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white h-full cursor-pointer"
        onclick="moveSlide(-1)">
        <div class="flex h-full items-center px-4">
            <img src="{{ asset('images/arrow.png') }}" alt="Descripción de la imagen" class="h-9 rotate-180">
        </div>
    </div>
    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white h-full cursor-pointer"
        onclick="moveSlide(1)">
        <div class="flex h-full items-center px-4">
            <img src="{{ asset('images/arrow.png') }}" alt="Descripción de la imagen" class="h-9">
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;
    let slideInterval;

    function showSlide(index) {
        const slides = document.getElementById('slides');
        const totalSlides = document.querySelectorAll('#slides > div').length;

        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }

        const offset = -currentIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    function moveSlide(step) {
        showSlide(currentIndex + step);
        resetInterval();
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(function() {
            moveSlide(1);
        }, 5000);
    }

    document.addEventListener('DOMContentLoaded', function() {
        showSlide(currentIndex);
        slideInterval = setInterval(function() {
            moveSlide(1);
        }, 5000); // Cambia de slide cada 5 segundos
    });
</script>
