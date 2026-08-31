<div class="flex flex-col md:flex-row items-center gap-6">
                    <a href="/" class="nav-link text-md font-semibold {{Route::currentRouteName() == 'home'
                        ? 'text-[#ffdc59]' : 'text-gray-800'}} hover:text-[#ffdc59]">Beranda</a>
                    <a href="{{ route('about-us') }}" class="nav-link text-md font-semibold {{Route::currentRouteName() == 'about-us'
                        ? 'text-[#ffdc59]' : 'text-gray-800'}} hover:text-[#ffdc59]">Tentang Kami</a>
                    <a href="{{ route('articles.index') }}"
                        class="nav-link text-md font-semibold {{Route::current()->getPrefix() == '/articles'
                        ? 'text-[#ffdc59]' : 'text-gray-800'}} hover:text-[#ffdc59]">Artikel</a>
                    <a href="https://chaakra-consulting.com/" target="_blank"
                        class="nav-link text-md font-semibold text-gray-800 hover:text-[#ffdc59]">Untuk Perusahaan</a>
                </div>