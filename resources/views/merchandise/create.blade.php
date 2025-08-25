@extends('layouts.main')

@section('title', 'Admin OnlyCars')

@section('content')
    <form action="{{ route('merchandise.store') }}" method="POST" enctype="multipart/form-data"
        class="max-w-2xl mx-auto p-6 mt-10 2xl:mt-20 rounded-2xl border border-zinc-800 bg-gradient-to-tr from-black to-zinc-900 shadow-lg">
        @csrf

        <h2 class="text-2xl font-semibold mb-4 text-white">Post Merchandise Baru</h2>

        <!-- Nama Merchandise -->
        <label class="block mb-3">
            <span class="text-sm text-zinc-300">Nama Merchandise</span>
            <input type="text" name='nama_merchandise' placeholder="Masukkan nama merchandise" required
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
        </label>

        <!-- Harga Merchandise -->
        <label class="block mb-3">
            <span class="text-sm text-zinc-300">Harga Merchandise</span>
            <input type="number" name='harga_merchandise' placeholder="Masukkan harga merchandise" required
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600" />
        </label>

        <!-- Deskripsi -->
        <label class="block mb-3">
            <span class="text-sm text-zinc-300">Deskripsi</span>
            <textarea rows="4" name="deskripsi_merchandise" placeholder="Masukkan deskripsi" required
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white placeholder:text-zinc-500 focus:outline-none focus:ring-2 focus:ring-zinc-600"></textarea>
        </label>

        <!-- Gambar -->
        <label class="block mb-4">
            <span class="text-sm text-zinc-300">Gambar Merchandise (Max: 5mb)</span>
            <input type="file" name="gambar_merchandise" onchange="previewImage(event)"
                class="mt-1 block w-full rounded-lg bg-transparent border border-zinc-700 px-3 py-2 text-white focus:outline-none" />
            <div id="imgPreview" class="mt-3 hidden">
                <p class="text-xs text-zinc-400 mb-2">Preview:</p>
                <img id="previewEl" src="#" alt="preview" class="max-h-48 rounded-md object-cover border border-zinc-700" />
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
        function previewImage(event) {
            const file = event.target.files[0];
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