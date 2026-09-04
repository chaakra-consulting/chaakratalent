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
    <meta name="keywords" content="Jasa Rekrutmen Perusahaan, Layanan Rekrutmen SDM, Biro Psikologi, Jasa Rekrutmen Perusahaan, Jasa Psikolog Surabaya, Pelatihan SDM Terbaik, Pelatihan SDM Surabaya">
    <meta name="description"
        content="Penyedia layanan rekrutmen, asesmen, dan pelatihan SDM untuk membantu perusahaan membangun tim yang kompeten" />
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
        <div class="relative w-full max-w-7xl mx-auto pb-16">
            <div class="relative z-10 flex flex-col items-center justify-center text-center px-4">
                <span
                    class="inline-flex items-center rounded-lg bg-[#ffdc59] px-2 py-1 text-md font-bold text-gray-800 inset-ring inset-ring-[#ffdc59]/20">Blog</span>
                <h1 class=" text-gray-800 text-4xl md:text-5xl lg:text-6xl font-extrabold max-w-3xl">
                    Artikel Terbaru
                </h1>

                <div class="max-w-3xl">
                    <h3 class="text-gray-600 text-xl mt-4 leading-relaxed">
                        Temukan wawasan, tips, dan panduan seputar psikologi, pengembangan SDM, dan dunia kerja di blog
                        kami.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ALPINE JS INFINITE SCROLL WRAPPER -->
    <!-- Passes initial PHP articles data and next page URL dynamically -->
    <div x-data="infiniteScroll(
        {{ isset($articles) ? json_encode($articles->items()) : '[]' }},
        '{{ isset($articles) ? $articles->nextPageUrl() : '' }}'
    )">

        <!-- GRID SECTION -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 md:px-10 md:pb-16" id="article-container">

            <!-- ALPINE TEMPLATE LOOP -->
            <!-- ALPINE TEMPLATE LOOP -->
            <template x-for="article in articles" :key="article.id">
                <!-- Added: h-full w-full (removed items-center justify-center to allow stretching) -->
                <a :href="'{{ route('articles.show', 'slug') }}'.replace('slug', article.slug)"
                    class="flex w-full h-full group hover:-translate-y-2 transition-transform ease-in-out duration-300 sr-bottom">

                    <!-- Card Container -->
                    <!-- Added: h-full flex flex-col -->
                    <div
                        class="w-full h-full flex flex-col max-w-screen rounded-[25px] bg-[#f3f3f3] group-hover:bg-gray-900 ease-in-out transition p-4">

                        <!-- Image & Badge Section -->
                        <div class="relative shrink-0">
                            <img :src="'{{asset('storage/' . 'url')}}'.replace('url',article.image) "
                                :alt="article.title" class="aspect-4/2 w-full rounded-[24px] object-cover" />

                            <!-- Category Badge -->
                            <span x-text="article.tags"
                                class="absolute left-4 top-4 rounded-xl bg-[#ffdc59] px-4 py-1.5 text-[15px] font-semibold text-black">
                            </span>
                        </div>

                        <!-- Text Content Section -->
                        <!-- Added: flex flex-col flex-grow -->
                        <div class="px-1 pb-2 pt-6 flex flex-col flex-grow">
                            <h2 x-text="article.title"
                                class="text-[26px] font-bold leading-[1.2] tracking-tight ease-in-out transition group-hover:text-white text-gray-800">
                            </h2>
                            <p x-text="stripHtml(article.content) ? stripHtml(article.content).substring(0, 80) + '...' : ''"
                                class="mt-3 text-[17px] leading-[1.6] group-hover:text-white/90 text-[#666666] whitespace-pre-line">
                            </p>

                            <!-- Added: mt-auto (This forces the author/date to the absolute bottom of the card) -->
                            <p class="mt-auto pt-4 text-[10px] leading-[1.6] text-[#868686]">
                                <span x-text="article.author?.name || 'Admin'"></span> | <span
                                    x-text="formatDate(article.created_at)"></span>
                            </p>
                        </div>
                    </div>
                </a>
            </template>
            <div x-show="articles.length === 0" 
                 class="col-span-1 md:col-span-3 flex justify-center items-center py-16" 
                 style="display: none;">
                <p class="text-md text-gray-600">Artikel Kosong</p>
            </div>

        </section>

        <!-- INFINITE SCROLL LOADING TRIGGER -->
        <div x-ref="trigger" class="w-full py-10 flex justify-center items-center min-h-[80px]">
            <!-- Spinner toggles based on loading state -->
            <div x-show="isLoading"
                class="animate-spin rounded-full h-10 w-10 border-t-4 border-b-4 border-gray-800 border-t-[#ffdc59]"
                style="display: none;"></div>
        </div>

    </div>

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

        // --- ALPINE JS INFINITE SCROLL COMPONENT ---
        document.addEventListener('alpine:init', () => {
            Alpine.data('infiniteScroll', (initialArticles, initialNextPageUrl) => ({
                articles: initialArticles || [],
                nextPageUrl: initialNextPageUrl || null,
                isLoading: false,

                init() {
                    // Set up the Intersection Observer
                    const observer = new IntersectionObserver((entries) => {
                        // When the trigger div enters the viewport and we have a URL for the next page
                        if (entries[0].isIntersecting && this.nextPageUrl) {
                            this.fetchMoreData();
                        }
                    }, {
                        rootMargin: '150px'
                    }); // Load slightly before reaching the absolute bottom

                    // Start observing the trigger div (x-ref="trigger")
                    observer.observe(this.$refs.trigger);
                },

                stripHtml(html) {
                    if (!html) return '';
                    // const doc = new DOMParser().parseFromString(html, 'text/html');
                    // return doc.body.textContent || "";
                    const spacedHtml = html.replace(/<\/p>|<\/div>|<\/h[1-6]>|<br\s*\/?>/gi, '\n');
                    const doc = new DOMParser().parseFromString(spacedHtml, 'text/html');
                    return (doc.body.textContent || "").trim();
                },

                fetchMoreData() {
                    if (this.isLoading || !this.nextPageUrl) return;
                    this.isLoading = true;

                    // Standard XMLHttpRequest (Pure AJAX)
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', this.nextPageUrl, true);

                    // Crucial headers for Laravel to respond with JSON instead of HTML
                    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                    xhr.setRequestHeader('Accept', 'application/json');

                    xhr.onload = () => {
                        if (xhr.status >= 200 && xhr.status < 400) {
                            const response = JSON.parse(xhr.responseText);

                            // Check if Laravel returned standard paginator format (response.data)
                            const newArticles = response.data ? response.data : response;

                            // Append new articles to existing ones. Alpine handles DOM updates automatically.
                            this.articles = [...this.articles, ...newArticles];

                            // Update URL for the next iteration (null if no more pages)
                            this.nextPageUrl = response.next_page_url || null;

                            // Wait for Alpine to render the new HTML, then run ScrollReveal on the new elements
                            this.$nextTick(() => {
                                if (typeof sr !== 'undefined') sr.sync();
                            });
                        } else {
                            console.error('Server returned an error:', xhr.statusText);
                        }

                        this.isLoading = false;
                    };

                    xhr.onerror = () => {
                        console.error('Network error during infinite scroll request.');
                        this.isLoading = false;
                    };

                    xhr.send();
                },

                // Helper to format timestamps to '06 Sept 2026' style
                formatDate(dateString) {
                    if (!dateString) return '';
                    const options = {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    };
                    return new Date(dateString).toLocaleDateString('id-ID', options);
                }
            }));
        });
    </script>
</body>

</html>
