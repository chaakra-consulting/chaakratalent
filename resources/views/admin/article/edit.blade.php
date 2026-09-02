@extends('admin.layouts.app')


@section('content')
    {{-- Page Breadcrumb --}}
    <x-common.page-breadcrumb pageTitle="Edit Artikel" />

    <div class="space-y-5 sm:space-y-6">

        <form action="{{ route('admin.article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div x-data="{
                // Load the default image from Laravel if it exists
                imageUrl: @js($article->image ? asset('storage/' . $article->image) : null),
            
                handleFileDrop(e) {
                    if (e.dataTransfer.files.length > 0) {
                        this.processFile(e.dataTransfer.files[0]);
                    }
                },
                handleFileSelect(e) {
                    if (e.target.files.length > 0) {
                        this.processFile(e.target.files[0]);
                    }
                },
                processFile(file) {
                    let reader = new FileReader();
                    reader.onload = (e) => { this.imageUrl = e.target.result; };
                    reader.readAsDataURL(file);
                }
            }" class="w-full mb-6">

                <label @dragover.prevent="" @drop.prevent="handleFileDrop"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 relative overflow-hidden">

                    <!-- Displays the default/selected image -->
                    <template x-if="imageUrl">
                        <img :src="imageUrl" class="absolute inset-0 w-full h-full object-cover" />
                    </template>

                    <!-- Placeholder shown when there is no image -->
                    <div x-show="!imageUrl" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                    </div>

                    <input type="file" name="image" class="hidden" @change="handleFileSelect" accept="image/*" />
                </label>
            </div>
            <div class="space-y-8 sm:space-y-6 mb-2">
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Judul Artikel
                    </label>
                    <div class="relative">
                        <input type="text" name="title" value="{{ $article->title }}"
                            class="dark:bg-dark-900  shadow-theme-xs focus:ring-success-500/10  w-full rounded-lg border bg-white px-4 py-2.5 pr-10 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />

                    </div>

                    {{-- <p class="text-theme-xs text-success-500 mt-1.5">
                        This is an success message.
                    </p> --}}
                </div>
            </div>
            {{-- Tiptap WYSIWYG Editor --}}
            <div class="space-y-8 sm:space-y-6 mb-2">
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Konten Artikel
                    </label>

                    <style>
                        /* Styling dasar Tiptap */
                        .tiptap:focus {
                            outline: none;
                        }

                        .tiptap ul {
                            list-style-type: disc;
                            padding-left: 1.5rem;
                        }

                        .tiptap ol {
                            list-style-type: decimal;
                            padding-left: 1.5rem;
                        }

                        .tiptap h2 {
                            font-size: 1.5rem;
                            font-weight: bold;
                            margin-bottom: 0.5rem;
                        }

                        .tiptap h3 {
                            font-size: 1.25rem;
                            font-weight: bold;
                            margin-bottom: 0.5rem;
                        }
                    </style>

                    <!-- Tiptap Alpine Component -->
                    <div x-data="{
                        content: @js($article->content ?? ''),
                        isBold: false,
                        isItalic: false,
                        isStrike: false,
                        isH2: false,
                        isH3: false,
                        isBullet: false,
                        isOrdered: false,
                    
                        // Ambil instance editor dari element DOM (untuk menghindari bug Alpine Proxy)
                        getEditor() { return this.$refs.editorReference._tiptapEditor; },
                    
                        toggleBold() { if (this.getEditor()) this.getEditor().chain().focus().toggleBold().run() },
                        toggleItalic() { if (this.getEditor()) this.getEditor().chain().focus().toggleItalic().run() },
                        toggleStrike() { if (this.getEditor()) this.getEditor().chain().focus().toggleStrike().run() },
                        toggleH2() { if (this.getEditor()) this.getEditor().chain().focus().toggleHeading({ level: 2 }).run() },
                        toggleH3() { if (this.getEditor()) this.getEditor().chain().focus().toggleHeading({ level: 3 }).run() },
                        toggleBullet() { if (this.getEditor()) this.getEditor().chain().focus().toggleBulletList().run() },
                        toggleOrdered() { if (this.getEditor()) this.getEditor().chain().focus().toggleOrderedList().run() },
                    
                        init() {
                            const el = this.$refs.editorReference;
                    
                            // Dynamic import modul langsung saat komponen diinisialisasi
                            Promise.all([
                                import('https://esm.sh/@tiptap/core'),
                                import('https://esm.sh/@tiptap/starter-kit')
                            ]).then(([core, starterKit]) => {
                                el._tiptapEditor = new core.Editor({
                                    element: el,
                                    extensions: [starterKit.default],
                                    content: this.content,
                                    editorProps: {
                                        attributes: {
                                            class: 'prose dark:prose-invert max-w-none focus:outline-none min-h-[250px]',
                                        },
                                    },
                                    onUpdate: ({ editor }) => {
                                        this.content = editor.getHTML();
                                    },
                                    // Update state toolbar ketika posisi kursor berpindah/ada perubahan teks
                                    onTransaction: ({ editor }) => {
                                        this.isBold = editor.isActive('bold');
                                        this.isItalic = editor.isActive('italic');
                                        this.isStrike = editor.isActive('strike');
                                        this.isH2 = editor.isActive('heading', { level: 2 });
                                        this.isH3 = editor.isActive('heading', { level: 3 });
                                        this.isBullet = editor.isActive('bulletList');
                                        this.isOrdered = editor.isActive('orderedList');
                                    }
                                });
                            });
                        }
                    }"
                        class="dark:bg-dark-900 shadow-theme-xs w-full overflow-hidden rounded-lg border border-gray-300 bg-white text-sm text-gray-800 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90">

                        <!-- Editor Toolbar -->
                        <div
                            class="border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-2 flex flex-wrap gap-1 items-center">
                            <button type="button" @click="toggleBold()"
                                :class="isBold ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition font-bold">B</button>
                            <button type="button" @click="toggleItalic()"
                                :class="isItalic ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition italic">I</button>
                            <button type="button" @click="toggleStrike()"
                                :class="isStrike ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition line-through">S</button>
                            <div class="w-px h-5 bg-gray-300 dark:bg-gray-600 mx-1"></div>
                            <button type="button" @click="toggleH2()" :class="isH2 ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition font-bold text-xs">H2</button>
                            <button type="button" @click="toggleH3()" :class="isH3 ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition font-bold text-xs">H3</button>
                            <div class="w-px h-5 bg-gray-300 dark:bg-gray-600 mx-1"></div>
                            <button type="button" @click="toggleBullet()"
                                :class="isBullet ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">•
                                List</button>
                            <button type="button" @click="toggleOrdered()"
                                :class="isOrdered ? 'bg-gray-200 dark:bg-gray-700' : ''"
                                class="px-2 py-1.5 rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">1.
                                List</button>
                        </div>

                        <!-- Editor Container -->
                        <div x-ref="editorReference" class="min-h-[250px] p-4 cursor-text"></div>

                        <!-- Hidden input to submit the HTML via form -->
                        <input type="hidden" name="content" :value="content">
                    </div>
                </div>
            </div>

            {{-- <div class="space-y-8 sm:space-y-6 mb-2">
                <form.form-elements.editor />
            </div> --}}
            <div class="space-y-8 sm:space-y-6 mb-2">
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Tag
                    </label>
                    <div class="relative">
                        <input type="text" name="tags" value="{{ $article->tags }}"
                            class="dark:bg-dark-900  shadow-theme-xs focus:ring-success-500/10  w-full rounded-lg border bg-white px-4 py-2.5 pr-10 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />

                    </div>

                    {{-- <p class="text-theme-xs text-success-500 mt-1.5">
                        This is an success message.
                    </p> --}}
                </div>
            </div>
            <div class="space-y-8 sm:space-y-6 mb-2">
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Keywords
                    </label>
                    <div class="relative">
                        <input type="text" name="keywords" value="{{ $article->keywords }}"
                            class="dark:bg-dark-900  shadow-theme-xs focus:ring-success-500/10  w-full rounded-lg border bg-white px-4 py-2.5 pr-10 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />

                    </div>

                    {{-- <p class="text-theme-xs text-success-500 mt-1.5">
                        This is an success message.
                    </p> --}}
                </div>
            </div>
            <div class="space-y-8 sm:space-y-6 mb-2">
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Deskripsi Artikel
                    </label>
                    <div class="relative">
                        <input type="text" name="description" value="{{ $article->description }}"
                            class="dark:bg-dark-900  shadow-theme-xs focus:ring-success-500/10  w-full rounded-lg border bg-white px-4 py-2.5 pr-10 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />

                    </div>

                    {{-- <p class="text-theme-xs text-success-500 mt-1.5">
                        This is an success message.
                    </p> --}}
                </div>
            </div>
            <div class="space-y-8 sm:space-y-6 mb-2 mt-5">
                <button type="submit"
                    class="inline-flex items-end justify-end flex-shrink-0 px-4 py-2 text-sm font-medium text-center text-white transition bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1 dark:focus:ring-offset-gray-800">
                    Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
@endsection
