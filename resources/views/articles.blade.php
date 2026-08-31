<!doctype html>
<html lang="en">

<head>
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
        class="bg-white absolute z-50 group w-full h-26 md:h-auto px-6 py-4 transition-all duration-500 ease-in-out overflow-hidden [&.open]:h-[320px] md:[&.open]:h-auto [&.nav-sticky]:fixed [&.nav-sticky]:top-0 [&.nav-sticky]:left-0 [&.nav-sticky]:shadow-[0_4px_20px_rgba(0,0,0,0.08)] [&.nav-sticky]:bg-white/95 [&.nav-sticky]:backdrop-blur-md">
        <div class="max-w-screen mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="flex items-center justify-between w-full md:w-auto">
                <div class="shrink-0 flex items-center h-full">
                    <img src="{{ asset('assets/cms/images/logo-2.png') }}" alt="Logo" id="logo" class="h-18 w-auto object-contain" />
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

            @include('layouts.navbar')
        </div>
    </nav>

    <section id="heroSection"
        class="relative w-full px-6 md:px-10 pt-[120px] md:pt-[10%] justify-between flex flex-col">
        <div class="relative w-full max-w-7xl mx-auto pb-16">
            <div class="relative z-10 flex flex-col items-center justify-center text-center px-4">
                <span
                    class="inline-flex items-center rounded-lg bg-[#ffdc59] px-2 py-1 text-md font-bold text-gray-800 inset-ring inset-ring-[#ffdc59]/20">Blog</span>
                <h1
                    class="sr-left text-gray-800 text-4xl md:text-5xl lg:text-6xl font-extrabold max-w-3xl">
                    Artikel Terbaru
                </h1>

                <div class="max-w-3xl">
                    <h3 class="text-gray-600 text-xl mt-4 leading-relaxed sr-left">
                        Temukan wawasan, tips, dan panduan seputar psikologi, pengembangan SDM, dan dunia kerja di blog
                        kami.
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="grid md:grid-cols-3 gap-4 px-6 md:px-10 md:pb-16 md:pb-0 grid-flow-row md:grid-flow-col grid-cols-1">
        <a href="#" class="flex max-w-screen items-center justify-center group hover:-translate-y-2 transition-transform ease-in-out duration-300">
            <!-- Card Container -->
            <div class="w-full max-w-screen md:max-w-[400px] rounded-[25px] bg-[#f3f3f3] group-hover:bg-gray-900  ease-in-out transition p-4">
                <!-- Image & Badge Section -->
                <div class="relative">
                    <img src="https://framerusercontent.com/images/xgvT1z0zydCGbmMRZMJh1S1lXH8.jpg?scale-down-to=512&width=2500&height=1500" alt="Group of diverse people smiling"
                        class="aspect-4/2 w-full rounded-[24px] object-cover" />
                    <!-- Category Badge -->
                    <span
                        class="absolute left-4 top-4 rounded-xl bg-[#ffdc59] px-4 py-1.5 text-[15px] font-semibold text-black">
                        Tech
                    </span>
                </div>
                <!-- Text Content Section -->
                <div class="px-1 pb-4 pt-6">
                    <h2 class="text-[26px] font-bold leading-[1.2] tracking-tight  ease-in-out transition group-hover:text-white text-gray-800">
                        The Art of Website<br />
                        Typography: Best Practices<br />
                        and Tips
                    </h2>
                    <p class="mt-3 text-[17px] leading-[1.6]  group-hover:text-white/90 text-[#666666]">
                        "Discover the power of typography in<br />
                        web design for captivating user<br />
                        experiences.
                    </p>
                    <p class="mt-3 text-[10px] leading-[1.6] text-[#868686]">
                        Admin | 06 Sept 2026
                    </p>
                </div>
            </div>
        </a>
        <a href="#" class="flex max-w-screen items-center justify-center group hover:-translate-y-2 transition-transform ease-in-out duration-300">
            <!-- Card Container -->
            <div class="w-full max-w-screen md:max-w-[400px] rounded-[25px] bg-[#f3f3f3] group-hover:bg-gray-900  ease-in-out transition p-4">
                <!-- Image & Badge Section -->
                <div class="relative">
                    <img src="https://framerusercontent.com/images/xgvT1z0zydCGbmMRZMJh1S1lXH8.jpg?scale-down-to=512&width=2500&height=1500" alt="Group of diverse people smiling"
                        class="aspect-4/2 w-full rounded-[24px] object-cover" />
                    <!-- Category Badge -->
                    <span
                        class="absolute left-4 top-4 rounded-xl bg-[#ffdc59] px-4 py-1.5 text-[15px] font-semibold text-black">
                        Tech
                    </span>
                </div>
                <!-- Text Content Section -->
                <div class="px-1 pb-4 pt-6">
                    <h2 class="text-[26px] font-bold leading-[1.2] tracking-tight  ease-in-out transition group-hover:text-white text-gray-800">
                        The Art of Website<br />
                        Typography: Best Practices<br />
                        and Tips
                    </h2>
                    <p class="mt-3 text-[17px] leading-[1.6]  group-hover:text-white/90 text-[#666666]">
                        "Discover the power of typography in<br />
                        web design for captivating user<br />
                        experiences.
                    </p>
                    <p class="mt-3 text-[10px] leading-[1.6] text-[#868686]">
                        Admin | 06 Sept 2026
                    </p>
                </div>
            </div>
        </a>
        <a href="#" class="flex max-w-screen items-center justify-center group hover:-translate-y-2 transition-transform ease-in-out duration-300">
            <!-- Card Container -->
            <div class="w-full max-w-screen md:max-w-[400px] rounded-[25px] bg-[#f3f3f3] group-hover:bg-gray-900  ease-in-out transition p-4">
                <!-- Image & Badge Section -->
                <div class="relative">
                    <img src="https://framerusercontent.com/images/xgvT1z0zydCGbmMRZMJh1S1lXH8.jpg?scale-down-to=512&width=2500&height=1500" alt="Group of diverse people smiling"
                        class="aspect-4/2 w-full rounded-[24px] object-cover" />
                    <!-- Category Badge -->
                    <span
                        class="absolute left-4 top-4 rounded-xl bg-[#ffdc59] px-4 py-1.5 text-[15px] font-semibold text-black">
                        Tech
                    </span>
                </div>
                <!-- Text Content Section -->
                <div class="px-1 pb-4 pt-6">
                    <h2 class="text-[26px] font-bold leading-[1.2] tracking-tight  ease-in-out transition group-hover:text-white text-gray-800">
                        The Art of Website<br />
                        Typography: Best Practices<br />
                        and Tips
                    </h2>
                    <p class="mt-3 text-[17px] leading-[1.6]  group-hover:text-white/90 text-[#666666]">
                        "Discover the power of typography in<br />
                        web design for captivating user<br />
                        experiences.
                    </p>
                    <p class="mt-3 text-[10px] leading-[1.6] text-[#868686]">
                        Admin | 06 Sept 2026
                    </p>
                </div>
            </div>
        </a>
    </section>

    @include('layouts.footer')

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        // Page Loader
        window.addEventListener('load', function () {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0');
                setTimeout(() => { loader.style.display = 'none'; }, 500);
            }
        });

        document.addEventListener("scroll", function () {
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

        window.addEventListener("scroll", handleNavSticky, { passive: true });
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

      
    </script>
</body>

</html>