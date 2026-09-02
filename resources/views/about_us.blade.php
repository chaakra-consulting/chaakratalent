<!doctype html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M4JWWQZ09M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M4JWWQZ09M');
    </script>
    <title>Layanan Psikologi - Chaakra Talent</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Layanan Psikologi Chaakra Consulting: Rekrutmen, Assessment, dan Pengembangan SDM." />
    <link rel="icon" href="{{ asset('assets/cms/images/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/cms/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light-border.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-[#fafafa] overflow-x-hidden">
    <div id="page-loader"
        class="fixed inset-0 z-[99999] bg-white flex items-center justify-center transition-opacity duration-500">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-gray-800 border-t-[#ffdc59]"></div>
    </div>

    <div id="navBackdrop"
        class="fixed inset-0 z-40 bg-gray-900/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-500 ease-in-out md:hidden">
    </div>

    <nav id="mainNav"
        class=" absolute z-50 group w-full h-26 md:h-auto px-6 py-4 transition-all duration-500 ease-in-out overflow-hidden [&.open]:h-[320px] md:[&.open]:h-auto [&.nav-sticky]:fixed [&.nav-sticky]:top-0 [&.nav-sticky]:left-0 [&.nav-sticky]:shadow-[0_4px_20px_rgba(0,0,0,0.08)] [&.nav-sticky]:bg-white/95 [&.nav-sticky]:backdrop-blur-md">
        <div class="max-w-screen mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="flex items-center justify-between w-full md:w-auto">
                <div class="shrink-0 flex items-center h-full">
                    <img src="{{ asset('assets/cms/images/logo-2.png') }}" alt="Logo" id="logo"
                        class="h-18 w-auto object-contain" />
                </div>

                <button id="menuToggleBtn"
                    class="cursor-pointer flex md:hidden relative w-12 h-12 justify-center items-center rounded-md focus:outline-none">
                    <div class="relative w-7 h-4">
                        <span
                            class="absolute top-0 left-0 w-full h-0.5 bg-slate-800 transition-all duration-300 ease-in-out group-[.open]:top-2 group-[.open]:rotate-45"></span>
                        <span
                            class="absolute top-2 left-0 w-full h-0.5 bg-slate-800 transition-all duration-300 ease-in-out group-[.open]:opacity-0 group-[.open]:w-0"></span>
                        <span
                            class="absolute top-4 left-0 w-full h-0.5 bg-slate-800 transition-all duration-300 ease-in-out group-[.open]:top-2 group-[.open]:-rotate-45"></span>
                    </div>
                </button>
            </div>

            <div class="hidden group-[.open]:flex md:flex flex-col md:flex-row items-center gap-6 w-auto mt-4 md:mt-0">
                @include('layouts.navbar')
                <!-- <a href="#"
                    class="cursor-pointer relative z-10 flex items-center justify-center gap-2 px-4 py-2 mx-auto overflow-hidden text-lg border-2 border-gray-50 rounded-full bg-gray-50 backdrop-blur-md lg:font-medium font-semibold text-gray-800 before:absolute before:-z-10 before:aspect-square before:w-full before:-left-full before:rounded-full before:bg-[#ffdc59] before:transition-all before:duration-700 hover:before:left-0 hover:before:w-full hover:before:scale-150 hover:[&_svg]:rotate-90 hover:[&_svg]:bg-gray-50 hover:[&_svg]:border-transparent">
                    Explore

                    <svg class="w-8 h-8 p-2 duration-300 ease-linear font-semibold border-gray-800 rounded-full rotate-45 text-gray-50"
                        viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                            class="fill-gray-800 transition-colors duration-300"></path>
                    </svg>
                </a> -->
            </div>
        </div>
    </nav>

    <section id="heroSection"
        class="relative w-full px-6 md:px-10 pt-[120px] md:pt-[10%] justify-between flex flex-col">
        <div class="relative w-full max-w-7xl mx-auto pb-16">
            <div style="background-image: url('{{ asset('assets/cms/images/about_us.png') }}'); background-size: cover; background-position: center;"
                class="relative rounded-[2rem] overflow-hidden bg-[#ffdc59] shadow-2xl h-[400px] flex items-center justify-center">
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 pt-12 pb-16 text-center sr-bottom">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 leading-tight">
            Merekrut dengan Tepat,<br />
            <span class="text-[#ffdc59]"> Mendampingi hingga Berdampak.</span>
        </h2>
        <div class="space-y-2 text-gray-600 text-base md:text-lg leading-relaxed">
            <p>
                Chaakra Talent merupakan bagian dari Chaakra Consulting yang berfokus pada jasa rekrutmen dan
                pengembangan SDM. Kami membantu perusahaan menemukan talenta yang tepat, bukan hanya berdasarkan
                kompetensi, tetapi juga kesesuaian dengan <strong>Job Fit</strong> dan <strong>Cultural Fit</strong>.
            </p>
            <p>
                Bagi kami, rekrutmen tidak berhenti saat kandidat diterima. Bukan sekadar merekrut, kami dampingi 3
                bulan pertama untuk membantu karyawan baru beradaptasi, mencapai ekspektasi pekerjaan, dan membangun
                produktivitas sejak awal bergabung.
            </p>
        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-7xl mx-auto px-6 md:px-8 text-center mb-10 sr-bottom">
            <h3 class="text-3xl font-bold text-gray-900 mb-3">Galeri Foto</h3>
            <p class="text-gray-600 text-sm md:text-base">Melihat lebih dekat bagaimana kami bekerja dan berinteraksi
                dengan klien serta tim internal untuk memberikan layanan terbaik.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="masonry-gallery -mx-2">

                <div class="gallery-sizer w-full sm:w-1/2 md:w-1/3 lg:w-1/4"></div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/1.png') }}" alt="Office Workspace"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/2.png') }}" alt="Team Meeting"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/3.png') }}" alt="Discussion"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/4.png') }}" alt="Workshop"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/5.png') }}" alt="Consulting"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>
                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/6.png') }}" alt="HR Interview"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/7.png') }}" alt="Meeting Room"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/8.jpeg') }}" alt="Team Collaboration"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/9.jpeg') }}" alt="Working at Desk"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/10.jpeg') }}" alt="Colleagues Talking"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom"
                    style="transition-delay: 250ms;">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/11.jpeg') }}" alt="Strategy Presentation"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/12.jpeg') }}" alt="Client Consultation"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/13.jpeg') }}" alt="Team Building"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/14.jpeg') }}" alt="Brainstorming Session"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>

                <div class="gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 sr-bottom">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 group shadow-sm">
                        <img src="{{ asset('assets/cms/images/galleries/15.jpeg') }}" alt="Corporate Office"
                            class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-[#236490]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

    <script>
        // Page Loader
        window.addEventListener('load', function() {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }
        });

        document.addEventListener("scroll", function() {
            const indicator = document.getElementById("scrollIndicator");
            const heroSection = document.getElementById("heroSection");

            if (indicator && heroSection) {
                const triggerPoint = heroSection.offsetHeight * 0.15;

                if (window.scrollY > triggerPoint) {
                    indicator.classList.remove("opacity-100", "translate-y-0");
                    indicator.classList.add(
                        "opacity-0",
                        "-translate-y-4",
                        "pointer-events-none",
                    );
                } else {
                    indicator.classList.add("opacity-100", "translate-y-0");
                    indicator.classList.remove(
                        "opacity-0",
                        "-translate-y-4",
                        "pointer-events-none",
                    );
                }
            }
        });

        // --- NEW NAVBAR AND BACKDROP LOGIC ---
        const mainNav = document.getElementById("mainNav");
        const menuToggleBtn = document.getElementById("menuToggleBtn");
        const navBackdrop = document.getElementById("navBackdrop");

        function toggleMenu() {
            const isOpen = mainNav.classList.toggle("open");

            if (isOpen) {
                navBackdrop.classList.remove("opacity-0", "pointer-events-none");
                navBackdrop.classList.add("opacity-100", "pointer-events-auto");
            } else {
                navBackdrop.classList.remove("opacity-100", "pointer-events-auto");
                navBackdrop.classList.add("opacity-0", "pointer-events-none");
            }
        }

        menuToggleBtn.addEventListener("click", toggleMenu);

        document.addEventListener("click", (event) => {
            const isClickInsideNav = mainNav.contains(event.target);
            const isClickOnToggle = menuToggleBtn.contains(event.target);
            const isMenuOpen = mainNav.classList.contains("open");

            if (isMenuOpen && !isClickInsideNav && !isClickOnToggle) {
                toggleMenu();
            }
        });

        function handleNavSticky() {
            const navLinks = document.querySelectorAll("#mainNav .nav-link");
            if (window.scrollY > 10) {
                mainNav.classList.add("nav-sticky");

            } else {
                mainNav.classList.remove("nav-sticky");

            }
        }

        window.addEventListener("scroll", handleNavSticky, {
            passive: true
        });
        window.addEventListener("resize", handleNavSticky);

        // Scroll Reveal
        ScrollReveal().reveal(".sr-bottom", {
            origin: "bottom",
            distance: "30px",
            duration: 800,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
            interval: 100,
        });

        ScrollReveal().reveal(".sr-left", {
            origin: "left",
            distance: "40px",
            duration: 800,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)"
        });

        // Masonry Init
        window.addEventListener('load', function() {
            var grid = document.querySelector('.masonry-gallery');

            if (grid) {
                var msnry = new Masonry(grid, {
                    itemSelector: '.gallery-item',
                    columnWidth: '.gallery-sizer',
                    percentPosition: true,
                    transitionDuration: '0.4s' // Smooth reshuffling on window resize
                });
            }
        });
    </script>
</body>

</html>
