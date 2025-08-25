@extends('layouts.main')

@section('content')

    <x-subheading>Events</x-subheading>

    <!-- events content -->
    <div class="space-y-5">
        <div data-aos="fade-up" class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-5">

            @foreach ($events as $e)
                <div
                    class="bg-gradient-to-tr from-black to-zinc-900 w-full aspect-square p-2 border border-zinc-800 rounded-2xl overflow-hidden hover:brightness-105 transition">
                    <a href="{{ route('events.show', $e->id) }}" class="flex flex-col h-full w-full hover:scale-104 transition">
                        <img src="{{ asset('storage/' . $e['gambar_event']) }}" alt="{{ $e['nama_event'] }} image"
                            class="flex-1 object-cover bg-zinc-800 rounded-t-xl overflow-hidden">

                        <div
                            class="flex-1 p-5 flex flex-col gap-5 max-h-1/2 bg-black border border-zinc-800 rounded-b-xl overflow-hidden">

                            <div class="flex flex-col gap-2 text-xl font-semibold">
                                <h5 class="truncate">
                                    {{ $e['nama_event'] }}
                                </h5>
                                <div class="flex flex-col gap-2 justify-start">
                                    <h6 class="flex flex-col gap-2 text-sm text-zinc-500">
                                        {{ $e['tanggal_event'] }}
                                    </h6>
                                    <p class="text-sm text-zinc-500 font-semibold truncate">
                                        {{ $e['lokasi_event'] }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <p
                                    class="text-zinc-500 font-semibold line-clamp-5 lg:line-clamp-3 2xl:line-clamp-7">
                                    {{ $e['deskripsi_event'] }}
                                </p>

                            </div>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>

        <div>
            {{ $events->links('vendor.pagination.tailwind') }}
        </div>
    </div>


@endsection

@section('footer')