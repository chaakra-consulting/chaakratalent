<!doctype html>
<html lang="en">

<head>
    <title>Chaakra Talent - Penyedia Jasa Pengembangan SDM</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Jasa Rekrutmen Perusahaan, Layanan Rekrutmen SDM, Biro Psikologi, Jasa Rekrutmen Perusahaan, Jasa Psikolog Surabaya, Pelatihan SDM Terbaik, Pelatihan SDM Surabaya">
    <meta name="description"
        content="Penyedia layanan rekrutmen, asesmen, dan pelatihan SDM untuk membantu perusahaan membangun tim yang kompeten" />
    <meta name="google-site-verification" content="RFgW4y6g5rO61tYhzA0Z8LzNAPWF4Y45Eoin25nYgQ0" />
    <link rel="icon" href="{{ asset('assets/cms/images/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/cms/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light-border.css" />
    <style>
        .splide__pagination {
            bottom: 3rem !important;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M4JWWQZ09M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-M4JWWQZ09M');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18424222199"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-18424222199');
    </script>
</head>

<body class="bg-white overflow-x-hidden">
    <!-- Page Loader -->
    <div id="page-loader"
        class="fixed inset-0 z-[99999] bg-white flex items-center justify-center transition-opacity duration-500">
        <!-- <div class="loadingspinner">
            <div id="square1"></div>
            <div id="square2"></div>
            <div id="square3"></div>
            <div id="square4"></div>
            <div id="square5"></div>
        </div> -->
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
                    <img src="{{ asset('assets/cms/images/logo-2-white.webp') }}" alt="Logo" id="logo"
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
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <a href="/" class="nav-link text-md font-semibold text-[#ffdc59] hover:text-[#ffdc59]">Beranda</a>
                    <a href="{{ route('about-us') }}"
                        class="nav-link text-md font-semibold text-white hover:text-[#ffdc59]">Tentang Kami</a>
                    <a href="{{ route('articles.index') }}"
                        class="nav-link text-md font-semibold text-white hover:text-[#ffdc59]">Artikel</a>
                    <a href="https://chaakra-consulting.com/" target="_blank"
                        class="nav-link text-md font-semibold text-white hover:text-[#ffdc59]">Untuk Perusahaan</a>
                </div>
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

    <section id="heroSection" class="relative w-full min-h-[80vh] mb-36 justify-between flex md:flex-row flex-col">
        <div class="relative w-full pb-24">

            <div id="hero-slider" class="splide relative overflow-hidden bg-gray-900 shadow-xl h-150 w-full z-0">
                <div class="splide__track h-full w-full">
                    <ul class="splide__list h-full w-full">
                        <li class="splide__slide h-full w-full">
                            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                                style="background-image: url('{{ asset('assets/cms/images/slides/slide-1.webp') }}');">
                            </div>
                        </li>

                        <li class="splide__slide h-full w-full">
                            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                                style="background-image: url('{{ asset('assets/cms/images/slides/slide-2.webp') }}');">
                            </div>
                        </li>

                        <li class="splide__slide h-full w-full">
                            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                                style="background-image: url('{{ asset('assets/cms/images/slides/slide-3.webp') }}');">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="absolute left-1/2 -translate-x-1/2 -bottom-[10%] md:-bottom-4 w-[95%] max-w-[900px] sr-bottom z-20">
                <div class="bg-white rounded-2xl shadow-xl p-6 z-20">

                    <div
                        class="md:flex grid grid-flow-cols grid-cols-2 grid-rows-2 md:flex-row items-center gap-4 md:gap-0">

                        <div class="flex flex-col items-center text-center w-full">
                            <h3 class="text-3xl md:text-4xl font-extrabold text-[#D57B28] mb-3"> 10k+</h3>
                            <p class="text-gray-600 font-medium text-sm md:text-base leading-snug">Total Peserta Talent
                                Tertangani</p>
                        </div>

                        <div class="flex flex-col items-center text-center w-full">
                            <h3 class="text-3xl md:text-4xl font-extrabold text-[#D57B28] mb-3">50+</h3>
                            <p class="text-gray-600 font-medium text-sm md:text-base leading-snug">Psikolog Profesional
                                Terafiliasi</p>
                        </div>

                        <div class="flex flex-col items-center text-center w-full">
                            <h3 class="text-3xl md:text-4xl font-extrabold text-[#D57B28] mb-3">2k+</h3>
                            <p class="text-gray-600 font-medium text-sm md:text-base leading-snug">Pembuatan Kontrak
                                Kerja Perusahaan</p>
                        </div>

                        <div class="flex flex-col items-center text-center w-full">
                            <h3 class="text-3xl md:text-4xl font-extrabold text-[#D57B28] mb-3">100+</h3>
                            <p class="text-gray-600 font-medium text-sm md:text-base leading-snug">Alat tes Psikologi
                                ter-update</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <div class="max-w-full px-4 md:px-10 overflow-hidden">
        <h2 class="text-center font-extrabold text-3xl md:text-4xl text-gray-800 mb-10 sr-bottom">
            Kami Memiliki Jaringan Psikolog Profesional Nasional untuk Mendukung Skala Bisnis Anda di Berbagai Kota
        </h2>
        <div class="max-w-3xl mx-auto">
            <p class="text-center text-3xl md:text-xl text-gray-800 mb-10 sr-bottom">Memudahkan perusahaan Anda
                melakukan asesmen, rekrutmen, dan pemetaan talenta secara serentak di berbagai kota sesuai standar
                profesi yang konsisten dan kredibel</p>

        </div>

        <img alt="Peta Persebaran Jaringan Psikologi Chaakra" src="{{ asset('assets/cms/images/map-new.svg') }}" class="w-full md:scale-100 sr-zoom" srcset="" />
    </div>

    <section class="py-16">
        <div class="max-w-full mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 sr-bottom">
                Apakah Bisnis Anda Mengalami Tantangan Ini?
            </h2>

            <div class="max-w-7xl mx-auto px-6 py-12 font-sans">
                <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-[#f4f5f7] rounded-[24px] p-6 flex flex-col gap-5 text-left sr-bottom">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-[#195A41] flex items-center justify-center text-white shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div
                                class="bg-white px-3 py-1 rounded-full text-[13px] font-medium text-gray-700 shadow-sm">
                                Masalah #1
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-[20px] font-bold text-gray-800 underline decoration-gray-300 decoration-2 underline-offset-4 mb-2">
                                Sulit menemukan Kandidat yang Tepat
                            </h3>
                            <p class="text-[13.5px] text-gray-600 leading-relaxed">
                                Tidak semua kandidat yang memenuhi kualifikasi memiliki
                                karakter dan nilai yang sesuai dengan budaya perusahaan.
                            </p>
                        </div>
                    </div>

                    <div class="bg-[#f4f5f7] rounded-[24px] p-6 flex flex-col gap-5 shadow-sm text-left sr-bottom">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-[#BE2D53] flex items-center justify-center text-white shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="bg-white px-3 py-1 rounded-full text-[13px] font-medium text-gray-700 shadow-sm">
                                Masalah #2
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-[20px] font-bold text-gray-800 underline decoration-gray-300 decoration-2 underline-offset-4 mb-2">
                                Proses Seleksi Memakan Waktu Lama
                            </h3>
                            <p class="text-[13.5px] text-gray-600 leading-relaxed">
                                Penyaringan kandidat hingga proses wawancara sering menyita
                                waktu dan mengurangi fokus pada prioritas bisnis.
                            </p>
                        </div>
                    </div>

                    <div class="bg-[#f4f5f7] rounded-[24px] p-6 flex flex-col gap-5 shadow-sm text-left sr-bottom">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-[#91B59C] flex items-center justify-center text-white shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div
                                class="bg-white px-3 py-1 rounded-full text-[13px] font-medium text-gray-700 shadow-sm">
                                Masalah #3
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-[20px] font-bold text-gray-800 underline decoration-gray-300 decoration-2 underline-offset-4 mb-2">
                                Kekhawatiran dalam Hal Merekrut
                            </h3>
                            <p class="text-[13.5px] text-gray-600 leading-relaxed">
                                Keputusan rekrutmen yang kurang tepat dapat berdampak pada
                                produktivitas tim, biaya operasional, dan kinerja organisasi.
                            </p>
                        </div>
                    </div>

                    <div class="bg-[#f4f5f7] rounded-[24px] p-6 flex flex-col gap-5 shadow-sm text-left sr-bottom">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-7 h-7 rounded-full bg-[#91B59C] flex items-center justify-center text-white shrink-0">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="bg-white px-3 py-1 rounded-full text-[13px] font-medium text-gray-700 shadow-sm">
                                Masalah #4
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-[20px] font-bold text-gray-800 underline decoration-gray-300 decoration-2 underline-offset-4 mb-2">
                                Minim Pendampingan
                            </h3>
                            <p class="text-[13.5px] text-gray-600 leading-relaxed">
                                Belum adanya pendampingan intensif di awal 3 bulan pertama
                                karyawan bekerja
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Pivot -->
            <div class="px-6 md:px-0 mt-4 md:mt-0 sr-bottom">
                <button
                    class="max-md:w-full bg-[#ffdc59] cursor-pointer text-white px-8 py-4 md:py-3 max-md:rounded-md rounded-md font-semibold hover:bg-[#dab636] transition">
                    Hubungi Tim Ahli Chaakra untuk Konsultasi
                </button>
            </div>
        </div>
    </section>



    <section class="w-full max-w-7xl mx-auto py-20 md:py-10 px-6 md:px-10 font-sans mb-20 h-auto overflow-hidden">
        <div class=" relative z-20 mb-20 lg:mb-5 sr-left">
            <p class="text-[#ffdc59] text-md font-bold tracking-wider uppercase mb-3">
                Why Choose Us? /
            </p>
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
                Memiliki Praktisi SDM & Psikolog Tersertifikasi dengan
                <span class="text-[#ffdc59]">Jam Terbang Lebih dari 10 tahun</span><br />
            </h2>
        </div>

        <div
            class="relative w-full max-w-2xl xl:max-w-[1200px]  shrink-0  mx-auto xl:aspect-[1200/675] xl:overflow-hidden">

            <svg class="hidden xl:block absolute inset-0 w-full h-full pointer-events-none z-0" viewBox="0 0 1200 675"
                xmlns="http://www.w3.org/2000/svg">

                <!-- Arrowhead Definition -->
                <defs>
                    <marker id="rounded-arrow" viewBox="0 0 12 12" refX="10" refY="6" markerWidth="10" markerHeight="10"
                        orient="auto">
                        <path d="M 2 2 L 10 6 L 2 10" fill="none" stroke="rgb(216, 140, 0)" stroke-width="2" />
                    </marker>
                </defs>

                <!-- Segmented Circular Paths with Arrows -->
                <!-- Right to Top -->
                <path d="M 756.5 350 A 210 210 0 0 0 546.5 140" fill="none" stroke="#ffdc59" stroke-width="2"
                    marker-end="url(#rounded-arrow)" />
                <!-- Top to Left -->
                <path d="M 546.5 140 A 210 210 0 0 0 336.5 350" fill="none" stroke="#ffdc59" stroke-width="2"
                    marker-end="url(#rounded-arrow)" />
                <!-- Left to Bottom -->
                <path d="M 336.5 350 A 210 210 0 0 0 546.5 560" fill="none" stroke="#ffdc59" stroke-width="2"
                    marker-end="url(#rounded-arrow)" />
                <!-- Bottom to Right -->
                <path d="M 546.5 560 A 210 210 0 0 0 756.5 350" fill="none" stroke="#ffdc59" stroke-width="2"
                    marker-end="url(#rounded-arrow)" />
            </svg>

            <div class="flex flex-col gap-8 xl:block">
                <div
                    class="sr-left relative flex flex-col sm:flex-row items-center sm:items-start xl:items-center gap-4 xl:gap-0 xl:absolute xl:left-[337px] xl:top-[213px] z-10">
                    <!-- Users Icon (Human Insight) -->
                    <div
                        class="w-16 h-16 bg-[#ffdc59] rounded-full flex items-center justify-center z-10 shadow-md shrink-0">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 text-gray-800">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div
                        class="flex-1 text-center sm:text-left xl:absolute xl:top-1/2 xl:-translate-y-1/2 xl:right-full xl:mr-5 xl:w-[280px] xl:text-right">
                        <h3 class="text-base sm:text-xl font-bold text-gray-800 italic">1. Job Profiling & Needs
                            Analysis
                        </h3>
                        <p class="text-sm sm:text-md text-[#6b6b6b] leading-[1.6] mt-1">Menyelaraskan standar
                            kompetensi
                            dengan kebutuhan spesifik posisi di perusahaan klien.</p>
                    </div>
                </div>

                <div
                    class="sr-bottom relative flex flex-col sm:flex-row items-center sm:items-start xl:items-center gap-4 xl:gap-0 xl:absolute xl:left-[358px] xl:top-[453px] z-10">
                    <!-- Bar Chart Icon (Data-Driven) -->
                    <div
                        class="w-16 h-16 bg-[#ffdc59] rounded-full flex items-center justify-center z-10 shadow-md shrink-0">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-800">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                    </div>
                    <!-- Adjacent Text -->
                    <div
                        class="flex-1 text-center sm:text-left xl:absolute xl:top-1/2 xl:-translate-y-1/2 xl:right-full xl:mr-5 xl:w-[280px] xl:text-right">
                        <h3 class="text-base sm:text-xl font-bold text-gray-800 italic">2. Chaakra Predictive
                            Competitive
                            Test
                        </h3>
                        <p class="text-sm sm:text-md text-[#6b6b6b] leading-[1.6] mt-1"> Kombinasi alat tes psikologi
                            khas chaakra + behavioral event interview / group discussion yang menghasilkan hasil test
                            lebih presisi.</p>
                    </div>
                </div>

                <div
                    class="sr-bottom relative flex flex-col sm:flex-row items-center sm:items-start xl:items-center gap-4 xl:gap-0 xl:absolute xl:left-[680px] xl:top-[453px] z-10">
                    <!-- Route/Journey Icon (End-to-End Partner) -->
                    <div
                        class="w-16 h-16 bg-[#ffdc59] rounded-full flex items-center justify-center z-10 shadow-md shrink-0">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 text-gray-800">
                            <circle cx="6" cy="19" r="3"></circle>
                            <path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"></path>
                            <circle cx="18" cy="5" r="3"></circle>
                        </svg>
                    </div>
                    <!-- Adjacent Text -->
                    <div
                        class="flex-1 text-center sm:text-left xl:absolute xl:top-1/2 xl:-translate-y-1/2 xl:left-full xl:ml-5 xl:w-[280px] xl:text-left">
                        <h3 class="text-base sm:text-xl font-bold text-gray-800 italic">3. Executive Reporting &
                            Recommendation
                            Partner</h3>
                        <p class="text-sm sm:text-md text-[#6b6b6b] leading-[1.6] mt-1"> Laporan hasil asesmen yang
                            actionable (dilengkapi peta kekuatan, development area, dan rekomendasi keputusan Go/No-Go).
                        </p>
                    </div>
                </div>

                <div
                    class="sr-right relative flex flex-col sm:flex-row items-center sm:items-start xl:items-center gap-4 xl:gap-0 xl:absolute xl:left-[700px] xl:top-[213px] z-10">
                    <!-- Target Icon (Actionable Solutions) -->
                    <div
                        class="w-16 h-16 bg-[#ffdc59] rounded-full flex items-center justify-center z-10 shadow-md shrink-0">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="w-7 h-7 text-gray-800">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                    </div>
                    <!-- Adjacent Text -->
                    <div
                        class="flex-1 text-center sm:text-left xl:absolute xl:top-[40%] xl:-translate-y-1/2 xl:left-full xl:ml-5 xl:w-[280px] xl:text-left">
                        <h3 class="text-base sm:text-xl font-bold text-gray-800 italic">4. Expert Debriefing & Feedback
                        </h3>
                        <p class="text-sm sm:text-md text-[#6b6b6b] leading-[1.6] mt-1">Sesi konsultasi hasil bersama
                            psikolog senior pada klien.</p>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-gray-800 mt-8 md:mt-0 font-light text-base text-center md:text-start ml-0 md:ml-[30vw]">Metodologi yang Chaakra gunakan</h4>

    </section>

    <!-- services section -->
    <div class="flex flex-col w-full items-start gap-16 px-6 md:px-10 min-h-screen pb-7 overflow-hidden">
        <div class="flex flex-col sm:flex-row gap-3 shrink-0 sr-left">
            <div class="w-90 bg-[#ffdc59] rounded-md flex items-center justify-center py-3">
                <h1 class="m-0 font-extrabold text-gray-800 text-5xl text-center">
                    Our Services
                </h1>
            </div>
            <div class="w-full md:w-130 pl-1 md:mt-2">
                <h4 class="text-gray-800 font-light text-base">
                    Bersama Konsultan Psikolog & Pengembangan Organisasi Berpengalaman Lebih Dari 10 Tahun
                    <!-- Konsultan Psikologi &amp; Pengembangan Organisasi Berpengalaman
                    Lebih Dari 10 Tahun. -->
                </h4>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 grid-cols-1 gap-8 items-stretch justify-center">
            <div class="group relative w-full h-full sr-bottom">
              
                <div
                    class="relative flex h-full flex-col overflow-hidden rounded-[24px] bg-gradient-to-br from-[#ffdc59]  via-[#a50010] to-[#ffdc59] p-[3px] pt-8 shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="absolute left-0 top-0 z-0 w-full py-2 text-center">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-white">Khusus Untuk
                            Korporat</span>
                    </div>

                    
                    <div class="relative z-10 flex h-full flex-1 flex-col rounded-[21px] bg-white p-6">

                        <div class="relative">
                            <h3 class="text-lg font-extrabold uppercase tracking-wider text-gray-800">
                                Psikotes & Assessmen Kompetensi <span class="italic">Talent</span>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Layanan asesmen psikologi dan uji kompetensi untuk seleksi serta pengembangan talent di
                                perusahaan.
                            </p>
                        </div>

                        <div class="relative mt-6 flex-1 space-y-4">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Psikotes Terstandar</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Laporan Kompetensi</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Seleksi Karyawan</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Konsultasi Hasil</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-8">
                            <button
                                onclick="window.location.href='https://wa.me/+6285730877745';"
                                class="group/btn relative w-full cursor-pointer overflow-hidden rounded-xl bg-[#ffdc59] p-px font-semibold text-white">
                                <div
                                    class="relative rounded-xl px-4 py-3 transition-colors group-hover/btn:bg-transparent">
                                    <span class="relative flex items-center justify-center gap-2 font-bold">
                                        Jadwalkan Konsultasi

                                    </span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative w-full h-full sr-bottom">
                <div
                    class="relative overflow-hidden rounded-2xl p-[1px] shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-[#ffdc59]/25 h-full">
                    <div class="absolute inset-0  opacity-20"></div>

                    <div class="relative rounded-2xl p-6 flex flex-col h-full">

                        <div class="relative">
                            <h3 class="text-lg font-extrabold uppercase tracking-wider text-gray-800">
                                <span class="italic">Talent Test</span> Persiapan Karier & Jurusan Sekolah
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Tes minat dan bakat untuk membantu pemilihan karier yang tepat dan jurusan sekolah yang
                                sesuai.
                            </p>
                        </div>

                        <div class="relative mt-6 space-y-4 flex-1">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Tes Minat & Bakat</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Rekomendasi Jurusan</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Perencanaan Karier</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Konsultasi Psikolog</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-8">
                            <button
                                onclick="window.location.href='https://choise.chaakra-consulting.com/talent-test/daftar/1';"
                                class="group/btn relative w-full overflow-hidden rounded-xl bg-[#ffdc59] p-px font-semibold text-white cursor-pointer">
                                <div
                                    class="relative rounded-xl px-4 py-3 transition-colors group-hover/btn:bg-transparent">
                                    <span class="relative font-bold flex items-center justify-center gap-2">
                                        Daftar Sekarang
                                        <!-- <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                            class="h-4 w-4 transition-transform duration-300 group-hover/btn:translate-x-1">
                                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg> -->
                                    </span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative w-full h-full sr-bottom">
                <div
                    class="relative overflow-hidden rounded-2xl p-[1px] shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-[#ffdc59]/25 h-full">
                    <div class="absolute inset-0  opacity-20"></div>

                    <div class="relative rounded-2xl p-6 flex flex-col h-full">

                        <div class="relative">
                            <h3 class="text-lg font-extrabold uppercase tracking-wider text-gray-800">
                                Program Pelatihan & Pembimbingan <span class="italic">Soft Skill</span>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                Program pelatihan soft skill dan bimbingan kesiapan memasuki dunia kerja.
                            </p>
                        </div>

                        <div class="relative mt-6 space-y-4 flex-1">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Memberikan Pelayanan Prima</p>
                                </div>
                            </div>

                            <!-- <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-[#ffdc59]">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#ffdc59]">Merumuskan Strategi Pelayanan yang Tepat
                                    </p>
                                    <p class="text-xs text-gray-500">

                                        Menyusun strategi layanan yang efektif sesuai kebutuhan pelanggan dan bisnis</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-[#ffdc59]">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-[#ffdc59]">Optimalisasi Penjualan Produk Funding
                                    </p>
                                    <p class="text-xs text-gray-500">

                                        Meningkatkan kinerja penjualan produk funding secara terukur dan berkelanjutan
                                    </p>
                                </div>
                            </div> -->

                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Fundamental Marketing</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Merumuskan Stretegi Penjualan</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffdc59]/10">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                        class="h-4 w-4 text-gray-500">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-500">Financial & Credit Analysis </p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mt-8">
                            <button
                                onclick="window.location.href='https://wa.me/+6285730877745';"
                                class="group/btn relative w-full overflow-hidden rounded-xl bg-[#ffdc59] p-px font-semibold text-white cursor-pointer">
                                <div
                                    class="relative rounded-xl px-4 py-3 transition-colors group-hover/btn:bg-transparent">
                                    <span class="relative font-bold flex items-center justify-center gap-2">
                                        Daftar Sekarang
                                        <!-- <svg stroke="currentColor" viewBox="0 0 24 24" fill="none"
                                            class="h-4 w-4 transition-transform duration-300 group-hover/btn:translate-x-1">
                                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linejoin="round"
                                                stroke-linecap="round"></path>
                                        </svg> -->
                                    </span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Testimonials -->

    <div class="px-6 md:px-10 mt-6 mb-6 md:mt-10 mx-auto w-full flex flex-col items-start">
        <div class="mb-8 lg:mb-10 sr-left">
            <h2 class="text-3xl md:text-5xl text-gray-800 font-medium leading-snug">
                What <span class="font-bold text-[#ffdc59]">People</span> Say <br>
                <span class="font-bold text-[#ffdc59]">About Us</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[auto_1fr] gap-6 w-full">
            <div class="flex flex-col md:w-75 w-full max-w-[300px] mx-auto justify-center h-full">
                <div
                    class="sr-top z-10 bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Kami berterima kasih kepada Chaakra Consulting yang selama ini membantu kami dalam hal rekrutmen. +/- 8 tahun BSI memercayakan Chaakra dalam perekrutan karyawan di level Account Officer
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <img src="{{ asset('assets/cms/images/clients/BSI.webp') }}" alt="Bank Syariah Indonesia">
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wider">Bank Syariah Indonesia
                                (BSI)</h4>
                            <span class="text-[10px] text-gray-400">REKRUTMEN</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Right Item 1 -->
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Tim di Chaakra Consulting sangat responsif dan membantu klien. Mereka menjawab semua pertanyaan kami dengan cepat, tepat dan memastikan kami memiliki semua informasi yang dibutuhkan sebelum kami melakukan tindakan
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <img src="{{ asset('assets/cms/images/clients/Wilmar.webp') }}"
                                alt="Wilmar International">
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">PT. Willmar
                            </h4>
                            <span class="text-[10px] text-gray-400">REKRUTMEN</span>
                        </div>
                    </div>
                </div>

                <!-- Right Item 2 -->
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Chaakra Consulting merupakan salah satu konsultan manajemen dan sdm terbaik yang pernah kami hire. Kami merekomendasikan Chaakra khususnya dalam bidang manajemen sumber daya manusia
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <img src="{{ asset('assets/cms/images/clients/indns_pwr.webp') }}" alt="PLN Indonesia Power">
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">PLN Indonesia Power
                            </h4>
                            <span class="text-[10px] text-gray-400">REKRUTMEN</span>
                        </div>
                    </div>
                </div>

                <!-- Right Item 3 -->
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Test TPA online sangat fleksibel. Bisa ikut tes sesuai dengan jadwal sendiri, sangat membantu
                        bagi saya yang memiliki kesibukan lain. membuat seluruh proses menjadi sangat mudah dan efisien
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C9.243 2 7 4.243 7 7c0 2.757 2.243 5 5 5s5-2.243 5-5c0-2.757-2.243-5-5-5zm0 12c-5.335 0-10 3.166-10 7h20c0-3.834-4.665-7-10-7z" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">Kurniawan Aji Prabowo
                            </h4>
                            <span class="text-[10px] text-gray-400">TES MINAT BAKAT</span>
                        </div>
                    </div>
                </div>

                <!-- Right Item 4 -->
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Pembelajaran sangat menarik untuk para Gen-Z pemateri disampaikan oleh para ahli sudah
                        memberikan edukasi dan motivasi jati diri menjadi lebih baik dibidang apapun
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C9.243 2 7 4.243 7 7c0 2.757 2.243 5 5 5s5-2.243 5-5c0-2.757-2.243-5-5-5zm0 12c-5.335 0-10 3.166-10 7h20c0-3.834-4.665-7-10-7z" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">Iqbal Fawwaz</h4>
                            <span class="text-[10px] text-gray-400">PELATIHAN SOFTSKILLS</span>
                        </div>
                    </div>
                </div>
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Bank Indonesia memiliki pengalaman yang luar biasa dengan Chaakra Consulting. Chaakra berusaha
                        keras untuk memastikan kami puas dengan jasa yang mereka berikan. Sangat memuaskan!
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <img src="{{ asset('assets/cms/images/clients/bank-indonesia.webp') }}"
                                alt="Bank Indonesia">
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">Bank Indonesia
                            </h4>
                            <span class="text-[10px] text-gray-400">REKRUTMEN</span>
                        </div>
                    </div>
                </div>
                <div
                    class="sr-top bg-white rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 z-10 flex flex-col justify-between">
                    <svg class="w-8 h-8 text-[#ffdc59] mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Rekrutmennya praktir, mudah, efisien dan tidak berbelit-belit. Sistemnya online sangat
                        memudahkan dalam proses rekrutmen
                    </p>
                    <div class="flex items-center gap-3 mt-auto">
                        <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C9.243 2 7 4.243 7 7c0 2.757 2.243 5 5 5s5-2.243 5-5c0-2.757-2.243-5-5-5zm0 12c-5.335 0-10 3.166-10 7h20c0-3.834-4.665-7-10-7z" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h4 class="text-xs font-bold text-gray-900 uppercase tracking-wider">Ika - Staff SDM Dillah
                                Group</h4>
                            <span class="text-[10px] text-gray-400">REKRUTMEN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Clients Section -->
    <section class="w-full max-w-7xl mx-auto py-24 px-6 md:px-10 font-sans bg-white overflow-hidden">
        <div class="flex flex-col items-center mb-16 sr-bottom">
            <div class="w-full flex items-center justify-center gap-6 mb-8">
                <div class="w-80 bg-[#ffdc59] rounded-md flex items-center justify-center py-3">
                    <h1 class="m-0 font-extrabold text-gray-800 text-5xl text-center">
                        Our Clients
                    </h1>
                </div>
            </div>

            <p class="text-gray-600 text-center max-w-3xl text-sm md:text-[20px] leading-relaxed sr-bottom">
                Kami telah dipercaya oleh berbagai instansi dan perusahaan untuk
                mendampingi perjalanan mereka dalam mengembangkan potensi sumber daya
                manusia dan mengoptimalkan kinerja organisasi secara profesional.
            </p>
        </div>

        <!-- Marquee Wrapper -->
        <div class="marquee-container relative w-full overflow-hidden flex items-center sr-bottom">
            <!-- Marquee Track -->
            <div class="animate-marquee flex items-center" id="marquee-track">
                <!-- --- FIRST SET OF LOGOS --- -->
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Wilmar.webp') }}"
                        alt="Wilmar International"
                        class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/BSI.webp') }}" alt="BSI"
                        class="max-h-16 md:max-h-36 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/logo_bri.webp') }}" alt="BRI"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/BTN.webp') }}" alt="BTN"
                        class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Japfa.webp') }}" alt="Japfa"
                        class="max-h-16 md:max-h-64 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Additon.webp') }}" alt="Additon"
                        class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Bapeda_Sidoarjo.webp') }}" alt="Bapeda Sidoarjo"
                        class="max-h-16 md:max-h-64 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/bpjs.webp') }}" alt="BPJS"
                        class="max-h-16 md:max-h-64 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/citicon.webp') }}" alt="Citicon"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/CRA.webp') }}" alt="CRA"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Eka_Ormed.webp') }}" alt="Eka Ormed"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/indns_pwr.webp') }}" alt="PLN Indonesia Power"
                        class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/jatim_grha_utama.webp') }}" alt="Jatim Grha Utama"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Logo_Terminal_Petikemas_Surabaya.webp') }}"
                        alt="Terminal Peti Kemas Surabaya"
                        class="max-h-16 md:max-h-20 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/pegadaian.webp') }}" alt="Pegadaian"
                        class="max-h-16 md:max-h-60 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/pelindo.webp') }}" alt="Pelindo"
                        class="max-h-16 md:max-h-60 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/sucofindo.webp') }}"
                        alt="Sucofindo" class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/properindoenvirotech.webp') }}" alt="PT PET"
                        class="max-h-16 md:max-h-24 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Wira_Jatim.webp') }}" alt="Wira Jatim"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/Sun_Flower.webp') }}" alt="Sun Flower"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/logo_pt_satona.webp') }}" alt="Satona"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/ITS-Tekno-Sains.webp') }}" alt="ITS Tekno Sains"
                        class="max-h-16 md:max-h-32 w-auto object-contain transition-opacity" />
                </div>
                <div
                    class="flex-shrink-0 flex items-center justify-center p-4 w-48 md:w-64 h-32 md:h-40 rounded-2xl mx-2">
                    <img src="{{ asset('assets/cms/images/clients/kai.webp') }}" alt="KAI"
                        class="max-h-16 md:max-h-20 w-auto object-contain transition-opacity" />
                </div>
            </div>
        </div>
    </section>

    <section class="w-full max-w-7xl mx-auto py-24 px-6 md:px-10 font-sans bg-white overflow-hidden">
        <div class="flex flex-col items-center mb-16 sr-bottom">
            <div class="w-full flex items-center justify-center gap-6 mb-8">
                <div class="w-90 bg-[#ffdc59] rounded-md flex items-center justify-center py-3">
                    <h1 class="m-0 font-extrabold text-gray-800 text-5xl text-center">
                        Our Campus Partners
                    </h1>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-10 lg:gap-14 max-w-6xl mx-auto place-items-center w-full">
            <div class="flex items-center justify-center p-6 w-full h-40 md:h-56 rounded-2xl sr-bottom">
                <img src="{{ asset('assets/cms/images/clients/Unair.webp') }}" alt="Unair"
                    class="max-h-20 md:max-h-32 w-auto object-contain transition-opacity" />
            </div>
            <div class="flex items-center justify-center p-6 w-full h-40 md:h-56 rounded-2xl sr-bottom">
                <img src="{{ asset('assets/cms/images/clients/ups_sby.webp') }}" alt="UPS Surabaya"
                    class="max-h-20 md:max-h-32 w-auto object-contain transition-opacity" />
            </div>
            <div class="flex items-center justify-center p-6 w-full h-40 md:h-56 rounded-2xl sr-bottom">
                <img src="{{ asset('assets/cms/images/clients/UWKS.webp') }}" alt="UWKS"
                    class="max-h-20 md:max-h-32 w-auto object-contain transition-opacity" />
            </div>
            <div class="flex items-center justify-center p-6 w-full h-40 md:h-56 rounded-2xl sr-bottom">
                <img src="{{ asset('assets/cms/images/clients/poliwangi.webp') }}" alt="Jatim Prasarana"
                    class="max-h-20 md:max-h-32 w-auto object-contain transition-opacity" />
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- WhatsApp Floating Action Button -->
    <a id="whatsappFab" href="https://wa.me/+6285730877745" target="_blank" rel="noopener noreferrer"
        aria-label="Chat with us on WhatsApp" title="Chat via WhatsApp"
        class="fixed bottom-7 right-7 z-[9999] w-15 h-15 rounded-full flex items-center justify-center no-underline shadow-lg transition-transform duration-300 group fab-entrance"
        style="
        background-color: #25d366;
        box-shadow:
          0 6px 24px rgba(37, 211, 102, 0.45),
          0 2px 8px rgba(0, 0, 0, 0.15);
      " onmouseover="
        this.style.transform = 'scale(1.12)';
        this.style.boxShadow =
          '0 10px 32px rgba(37,211,102,0.55), 0 4px 12px rgba(0,0,0,0.18)';
        document
          .getElementById('waTooltip')
          .classList.remove('opacity-0', 'translate-x-2');
        document
          .getElementById('waTooltip')
          .classList.add('opacity-100', 'translate-x-0');
      " onmouseout="
        this.style.transform = 'scale(1)';
        this.style.boxShadow =
          '0 6px 24px rgba(37,211,102,0.45), 0 2px 8px rgba(0,0,0,0.15)';
        document
          .getElementById('waTooltip')
          .classList.remove('opacity-100', 'translate-x-0');
        document
          .getElementById('waTooltip')
          .classList.add('opacity-0', 'translate-x-2');
      ">
        <!-- Pulse ring -->
        <span class="absolute inset-0 rounded-full opacity-40 pointer-events-none wa-pulse"
            style="background-color: #25d366"></span>

        <!-- WhatsApp SVG icon -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="white"
            class="relative z-10">
            <path
                d="M16 2C8.268 2 2 8.268 2 16c0 2.493.655 4.833 1.8 6.856L2 30l7.338-1.775A13.94 13.94 0 0 0 16 30c7.732 0 14-6.268 14-14S23.732 2 16 2zm0 25.5a11.44 11.44 0 0 1-5.84-1.6l-.418-.248-4.354 1.053 1.082-4.24-.272-.435A11.455 11.455 0 0 1 4.5 16C4.5 9.649 9.649 4.5 16 4.5S27.5 9.649 27.5 16 22.351 27.5 16 27.5zm6.29-8.61c-.345-.172-2.04-1.006-2.356-1.12-.316-.115-.546-.172-.776.172-.23.345-.89 1.12-1.09 1.35-.2.23-.4.258-.745.086-.345-.172-1.457-.537-2.775-1.712-1.025-.915-1.717-2.045-1.918-2.39-.2-.345-.021-.532.15-.703.155-.155.345-.403.517-.604.172-.2.23-.345.345-.575.115-.23.057-.431-.029-.604-.086-.172-.776-1.87-1.063-2.562-.28-.672-.563-.58-.776-.591l-.66-.011c-.23 0-.603.086-.919.431-.316.345-1.207 1.178-1.207 2.872s1.236 3.33 1.408 3.56c.172.23 2.432 3.71 5.893 5.205.824.356 1.468.569 1.969.728.827.263 1.58.226 2.175.137.663-.1 2.04-.834 2.328-1.638.287-.805.287-1.495.2-1.638-.086-.144-.316-.23-.66-.403z" />
        </svg>

        <!-- Tooltip -->
        <span id="waTooltip"
            class="absolute right-[calc(100%+12px)] top-1/2 -translate-y-1/2 translate-x-2 bg-gray-900 text-white text-[13px] font-semibold whitespace-nowrap px-3 py-1.5 rounded-lg opacity-0 pointer-events-none transition-all duration-200 shadow-md font-[Montserrat,sans-serif]">
            Chat via WhatsApp
        </span>
    </a>


    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <!-- SCROLL REVEAL LIBRARY -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#hero-slider', {
                type: 'loop',
                autoplay: true,
                interval: 4000,
                pauseOnHover: false,
                arrows: false,
                pagination: true
            }).mount();
        });
        window.addEventListener('load', function () {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('opacity-0');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500); // match transition duration
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            const track = document.getElementById("marquee-track");
            // Only clone if it exists to prevent errors
            if (track) {
                track.innerHTML += track.innerHTML;
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
                const logo = document.getElementById("logo");
                if (logo) {
                    logo.src = "{{ asset('assets/cms/images/logo-2.webp') }}";
                }
                // set nav-link text style to text-gray-800 when sticky
                navLinks.forEach((link) => {
                    if (link.textContent !== "Beranda") {
                        link.classList.remove("text-white");
                        link.classList.add("text-gray-800");
                    }
                });
            } else {
                mainNav.classList.remove("nav-sticky");
                const logo = document.getElementById("logo");
                if (logo) {
                    logo.src = "{{ asset('assets/cms/images/logo-2-white.webp') }}";
                }
                // remove text-gray-800 class from nav-links when not sticky
                navLinks.forEach((link) => {
                    if (link.textContent !== "Beranda") {
                        link.classList.remove("text-gray-800");
                        link.classList.add("text-white");
                    }
                });
            }
        }

        window.addEventListener("scroll", handleNavSticky, {
            passive: true
        });
        window.addEventListener("resize", handleNavSticky);

        // --- SCROLL REVEAL INITIALIZATION ---
        // Slide up animation
        ScrollReveal().reveal(".sr-bottom", {
            origin: "bottom",
            distance: "50px",
            duration: 1000,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
            interval: 150, // This handles staggered lists automatically
        });
        ScrollReveal().reveal(".sr-top", {
            origin: "top",
            distance: "50px",
            duration: 1000,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
            interval: 150, // This handles staggered lists automatically
        });

        // Slide from left animation
        ScrollReveal().reveal(".sr-left", {
            origin: "left",
            distance: "50px",
            duration: 1000,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
            interval: 150,
        });

        // Slide from right animation
        ScrollReveal().reveal(".sr-right", {
            origin: "right",
            distance: "50px",
            duration: 1000,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
        });

        // Zoom/Scale animation
        ScrollReveal().reveal(".sr-zoom", {
            scale: 0.85,
            duration: 1000,
            delay: 100,
            opacity: 0,
            easing: "cubic-bezier(0.5, 0, 0, 1)",
        });
    </script>
</body>

</html>