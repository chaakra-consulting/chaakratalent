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
    <title>Artikel - Chaakra Talent - {{ $article->title }}</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $article->description }}" />
    <meta name="keywords"
        content="Jasa Rekrutmen Perusahaan, Layanan Rekrutmen SDM, Biro Psikologi, Jasa Rekrutmen Perusahaan, Jasa Psikolog Surabaya, Pelatihan SDM Terbaik, Pelatihan SDM Surabaya,{{ $article->keywords }},{{ $article->tags }}">
    <link rel="icon" href="{{ asset('assets/cms/images/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/cms/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light-border.css" />
    <!-- Alpine.js is loaded here -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        h3 {
            /* text-3xl */
            font-size: 1.875rem;
            /* 30px */
            line-height: 2.25rem;
            /* 36px */
            /* text-gray-900 */
            color: #111827;
        }

        h2 {
            /* text-2xl */
            font-size: 1.5rem;
            /* 24px */
            line-height: 2rem;
            /* 32px */
            /* text-gray-900 */
            color: #111827;
        }

        /* md:text-[2rem] */
        @media (min-width: 768px) {
            h3 {
                font-size: 2rem;
                /* 32px */
            }

            h2 {
                font-size: 1.7rem;
            }
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
                    <img src="{{ asset('assets/cms/images/logo-2.webp') }}" alt="Logo" id="logo"
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

            @include('layouts.navbar')
        </div>
    </nav>

    <section id="heroSection"
        class="relative w-full px-6 md:px-10 pt-[120px] md:pt-[10%] justify-between flex flex-col">
        <div class="relative w-full max-w-7xl mx-auto">
            <div style="background-image: url('{{ asset('storage/' . $article->image) }}'); background-size: cover; background-position: center;"
                class="relative rounded-[2rem] overflow-hidden bg-[#ffdc59] shadow-2xl h-[420px] flex items-center justify-center">
            </div>
        </div>
    </section>


    <section class=" w-full justify-between flex flex-col">
        <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-start">
            <!-- Main Article Content -->
            <article class=" w-full">
                <div class="prose prose-lg prose-gray max-w-none">
                    <div
                        class="max-w-5xl mx-auto px-6 py-16 md:py-20 flex flex-col md:flex-row gap-8 md:gap-16 font-sans text-gray-800">

                        <!-- Left Sidebar: Social Actions -->
                        <!-- Left Sidebar: Social Actions -->
                        <aside class="flex-none flex flex-row md:flex-col gap-4 pt-2">
                            <!-- Twitter/X Icon -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-200 hover:bg-gray-900 transition-colors group"
                                aria-label="Share on X">
                                <svg class="w-4 h-4 group-hover:fill-white" viewBox="0 0 24 24">
                                    <path
                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>

                            <!-- Instagram / Native Share Icon -->
                            <!-- Instagram does not support direct web-sharing via URL. This uses the native Web Share API for mobile devices, and falls back to copying the link on desktop. -->
                            <a href="#"
                                onclick="if(navigator.share){ navigator.share({title: '{{ $article->title }}', url: window.location.href}); } else { navigator.clipboard.writeText(window.location.href); alert('Link copied to clipboard!'); } return false;"
                                class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-200 hover:bg-gray-900 transition-colors group"
                                aria-label="Share on Instagram or Copy Link">
                                <svg class="w-4 h-4 group-hover:fill-white" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                </svg>
                            </a>

                            <!-- Facebook Icon -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="w-12 h-12 flex items-center justify-center rounded-full border border-gray-200 hover:bg-gray-900 transition-colors group"
                                aria-label="Share on Facebook">
                                <svg class="w-4 h-4 group-hover:fill-white" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                        </aside>
                        <!-- Main Content Area -->
                        <article class="flex-1 max-w-4xl">

                            <h1
                                class="text-4xl md:text-[3.7rem] leading-tight font-bold text-gray-900 mb-8 tracking-tight">
                                {{ $article->title }}
                            </h1>

                            <div class="space-y-6 text-lg text-gray-700 leading-relaxed text-justify">
                                {!! $article->content !!}
                            </div>



                        </article>
                    </div>
                </div>
            </article>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

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

        // Sticky Nav Logic
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

        // Scroll Reveal Configuration
        const sr = ScrollReveal();
        sr.reveal(".sr-bottom", {
            origin: "bottom",
            distance: "30px",
            duration: 800,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
            interval: 100,
        });

        sr.reveal(".sr-left", {
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
