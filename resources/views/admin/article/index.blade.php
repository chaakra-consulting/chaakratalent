@extends('admin.layouts.app')

@section('content')
    {{-- Page Breadcrumb --}}
    <x-common.page-breadcrumb pageTitle="Artikel" />

    <div class="space-y-5 sm:space-y-6">
        @if (Session::has('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition.opacity.duration.500ms
                class="rounded-xl border border-success-500 bg-success-50 p-4 dark:border-success-500/30 dark:bg-success-500/15">

                <div class="flex items-start gap-3">
                    <div class="-mt-0.5 text-success-500">
                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.70186 12.0001C3.70186 7.41711 7.41711 3.70186 12.0001 3.70186C16.5831 3.70186 20.2984 7.41711 20.2984 12.0001C20.2984 16.5831 16.5831 20.2984 12.0001 20.2984C7.41711 20.2984 3.70186 16.5831 3.70186 12.0001ZM12.0001 1.90186C6.423 1.90186 1.90186 6.423 1.90186 12.0001C1.90186 17.5772 6.423 22.0984 12.0001 22.0984C17.5772 22.0984 22.0984 17.5772 22.0984 12.0001C22.0984 6.423 17.5772 1.90186 12.0001 1.90186ZM15.6197 10.7395C15.9712 10.388 15.9712 9.81819 15.6197 9.46672C15.2683 9.11525 14.6984 9.11525 14.347 9.46672L11.1894 12.6243L9.6533 11.0883C9.30183 10.7368 8.73198 10.7368 8.38051 11.0883C8.02904 11.4397 8.02904 12.0096 8.38051 12.3611L10.553 14.5335C10.7217 14.7023 10.9507 14.7971 11.1894 14.7971C11.428 14.7971 11.657 14.7023 11.8257 14.5335L15.6197 10.7395Z"
                                fill=""></path>
                        </svg>
                    </div>

                    <div>
                        <h4 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white/90">
                            Berhasil
                        </h4>

                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ Session::get('success') }}
                        </p>
                    </div>

                    <button @click="show = false"
                        class="ml-auto text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                        &times;
                    </button>
                </div>
            </div>
        @endif

        <div class="flex items-end justify-between gap-2">
            <a href="{{ route('admin.article.create') }}"
                class="inline-flex items-end justify-end flex-shrink-0 px-4 py-2 text-sm font-medium text-center text-white transition bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 dark:focus:ring-offset-gray-800">
                Tambah Artikel
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-4 md:pb-10 md:pb-0 grid-flow-row md:grid-flow-col grid-cols-1">
            @foreach ($articles as $item)
                <a href="{{ route('admin.article.edit', $item->id) }}"
                    class="group relative flex h-full w-full max-w-screen flex-col transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div
                        class="flex h-full w-full max-w-screen flex-col rounded-[25px] bg-[#f3f3f3] p-4 transition ease-in-out group-hover:bg-gray-900 dark:bg-gray-800 dark:group-hover:bg-gray-700 md:max-w-112.5">

                        <div class="relative shrink-0">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('https://framerusercontent.com/images/xgvT1z0zydCGbmMRZMJh1S1lXH8.jpg?scale-down-to=512&width=2500&height=1500 ') }}"
                                alt="Cover Artikel" class="aspect-[4/2] w-full rounded-[24px] object-cover" />

                            <span
                                class="absolute left-4 top-4 rounded-xl bg-[#ffdc59] px-4 py-1.5 text-[15px] font-semibold text-black">
                                {{ $item->tags }}
                            </span>

                            <!-- Tombol Delete yang sudah diperbarui -->
                            <button type="button" onclick="confirmDelete(event, {{ $item->id }})"
                                class="absolute right-2 top-4 z-10 rounded-full bg-red-500 p-2 text-white opacity-0 shadow-sm transition-all duration-300 ease-in-out hover:bg-red-400 group-hover:opacity-100"
                                aria-label="Delete post">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-1 flex-col px-1 pb-2 pt-6">
                            <h2
                                class="line-clamp-2 text-[26px] font-bold leading-[1.2] tracking-tight text-gray-800 transition ease-in-out group-hover:text-white dark:text-gray-100">
                                {{ $item->title }}
                            </h2>

                            <p
                                class="mt-3 line-clamp-3 text-[17px] leading-[1.6] text-[#666666] group-hover:text-white/90 dark:text-gray-400">
                                {{ $item->description }}
                            </p>

                            <p class="mt-auto pt-4 text-[10px] leading-[1.6] text-[#868686] dark:text-gray-500">
                                Admin | {{ Carbon\Carbon::createFromTimeString($item->created_at)->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Form Hapus Tersembunyi (Pastikan rutenya sesuai) -->
                <form id="delete-form-{{ $item->id }}" action="{{ route('admin.article.destroy', $item->id) }}"
                    method="POST" class="hidden" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach
        </div>

        <div>
            {{ $articles->links() }}
        </div>
    </div>

    <!-- Script SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(event, articleId) {
            // Mencegah klik men-trigger link <a> yang membungkus card
            event.preventDefault();
            event.stopPropagation();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Artikel yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444', // Tailwind red-500
                cancelButtonColor: '#6b7280', // Tailwind gray-500
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form yang sesuai dengan ID artikel
                    document.getElementById('delete-form-' + articleId).submit();
                }
            });
        }
    </script>
@endsection
