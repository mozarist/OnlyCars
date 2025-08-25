@extends('layouts.main')

@section('title', 'Admin OnlyCars')

@section('content')
    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data"
        class="max-w-2xl mx-auto p-6 mt-10 2xl:mt-20 rounded-2xl border border-zinc-800 bg-gradient-to-tr from-black to-zinc-900 shadow-lg">
        @csrf
        @method('PUT')

        <h2 class="text-2xl font-semibold mb-4 text-white">Edit Data Dari Gallery</h2>

        <!-- Judul -->
        <label class="block mb-3">
            <span class="text-sm text-zinc-300">Judul</span>
            <input type="text" name='nama_gallery' value="{{ $gallery->nama_gallery }}" placeholder="Masukkan judul" required
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
        </label>

        <!-- Tanggal -->
        <label class="block mb-3">
            <span class="text-sm text-zinc-300">Tanggal</span>
            <input type="date" name="tanggal_gallery" value="{{ $gallery->tanggal_gallery }}" required
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white focus:outline-none focus:ring-2 focus:ring-zinc-600" />
        </label>

        <!-- Gambar -->
        <label class="block mb-4">
            <span class="text-sm text-zinc-300">Gambar (Max: 5mb)</span>
            <input type="file" name="gambar_gallery"
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white focus:outline-none" />
            <div id="imgPreview" class="mt-3 hidden">
                <p class="text-xs text-zinc-400 mb-2">Preview:</p>
                <img id="previewEl" src="#" alt="preview" class="h-50 w-50 rounded-2xl object-cover border border-zinc-700" />
            </div>
        </label>

        <div class="flex items-center justify-end gap-3">
            <a href="/" class="px-4 py-2 rounded-lg border border-zinc-700 text-sm text-zinc-300 hover:bg-zinc-800">
                Batal
            </a>
            <button type="submit"
                class="px-5 py-2 rounded-lg bg-gradient-to-r from-blue-700 to-sky-500 text-white text-sm hover:brightness-110">
                Kirim
            </button>
        </div>
    </form>

    <script>
        function previewImage(gallery) {
            const file = gallery.target.files[0];
            const previewWrap = document.getElementById('imgPreview');
            const previewEl = document.getElementById('previewEl');

            if (!file) {
                previewWrap.classList.add('hidden');
                previewEl.src = '#';
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                previewEl.src = e.target.result;
                previewWrap.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    </script>

@endsection