@extends('layouts.main')

@section('content')

    <x-subheading>Merchandise</x-subheading>

    <!-- merchandise content -->
    <div class="space-y-5">
        <div data-aos="fade-up" class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-5">

            @foreach ($merchandise as $m)
                <div
                    class="bg-gradient-to-tr from-black to-zinc-900 w-full aspect-3/2 p-2 border border-zinc-800 rounded-2xl overflow-hidden hover:brightness-105 transition">

                    <a href="{{ route('merchandise.show', $m->id) }}"
                        class="group relative flex h-full w-full overflow-hidden rounded-xl focus:outline-none focus-visible:ring-4 focus-visible:ring-white/30">

                        <!-- Gambar -->
                        <img src="{{ asset('storage/' . $m->gambar_merchandise) }}" alt="{{ $m->nama_merchandise }} image"
                            class="h-full w-full object-cover object-center bg-zinc-800 transition-transform duration-500 group-hover:scale-105" />

                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent transition-opacity duration-300">
                            <div class="absolute inset-x-0 bottom-0 p-4">
                                <h3 class="text-lg font-semibold">{{ $m->nama_merchandise }}</h3>
                                <p class="text-sm text-white font-semivold">{{ $m->harga_merchandise }},00 Rp</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div>
            {{ $merchandise->links('vendor.pagination.tailwind') }}
        </div>
    </div>

@endsection

@section('footer')
