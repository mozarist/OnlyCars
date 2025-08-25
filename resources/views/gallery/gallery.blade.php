@extends('layouts.main')

@section('content')

    <x-subheading>Gallery</x-subheading>

    <!-- events content -->
    <div class="space-y-5">
        <div data-aos="fade-up" class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-5">

            @foreach ($gallery as $g)
                <div
                    class="bg-gradient-to-tr from-black to-zinc-900 w-full aspect-square p-2 border border-zinc-800 rounded-2xl overflow-hidden hover:brightness-105 transition">

                    <a href="{{ route('gallery.show', $g->id) }}"
                        class="group relative flex h-full w-full overflow-hidden rounded-xl focus:outline-none focus-visible:ring-4 focus-visible:ring-white/30">

                        <!-- Gambar -->
                        <img src="{{ asset('storage/' . $g->gambar_gallery) }}" alt="{{ $g->nama_gallery }} image"
                            class="h-full w-full object-cover object-center bg-zinc-800 transition-transform duration-500 group-hover:scale-105" />

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute inset-x-0 bottom-0 p-4">
                                <h3 class="text-lg font-semibold">{{ $g->nama_gallery }}</h3>
                                <p class="text-sm text-zinc-200">{{ $g->tanggal_gallery }}</p>
                            </div>
                        </div>
                    </a>
                </div>


            @endforeach

        </div>

        <div>
            {{ $gallery->links('vendor.pagination.tailwind') }}
        </div>
    </div>


@endsection

@section('footer')