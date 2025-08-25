@extends('layouts.main')

@include('layouts.hero')

@section('content')

    <!-- about section -->
    <div id="about" class="scroll-mt-25">
        <x-subheading>About Us</x-subheading>
    </div>


    <div data-aos="fade-up" class="flex flex-col gap-5 md:gap-0">

        <div class="flex flex-col md:flex-row justify-start gap-5 md:gap-0">
            <div class="space-y-5 w-full md:w-4/10 md:p-15 md:order-2">
                <h6 class="text-2xl font-semibold">
                    Siapa Kami?
                </h6>
                <p class="text-sm md:text-base lg:text-lg 2xl:text-xl">
                    OnlyCars adalah komunitas pecinta mobil yang hadir untuk menghubungkan para penggemar otomotif dari
                    berbagai
                    latar belakang. Kami percaya bahwa setiap mobil memiliki cerita, dan setiap pemiliknya punya passion
                    yang
                    ingin
                    dibagikan.
                </p>
            </div>
            <img src="https://images.unsplash.com/photo-1754502167745-4539921387f7?q=80&w=386&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img"
                class="object-cover w-full md:w-6/10 h-115 bg-zinc-500 rounded-4xl lg:rounded-br-none md:order-1">
        </div>

        <div class="flex flex-col md:flex-row md:justify-end gap-5 md:gap-0">
            <p class="w-full md:w-4/10 text-sm md:text-base lg:text-lg 2xl:text-xl md:pt-15 md:pr-15 md:order-1">
                Sejak berdiri, OnlyCars menjadi ruang untuk berbagi pengalaman, bertukar informasi, dan menikmati
                kebersamaan
                dalam dunia otomotif. Dari sekadar diskusi ringan tentang modifikasi, tips perawatan, hingga konvoi dan
                acara
                kumpul bersama, semua itu menjadi bagian dari identitas kami.
            </p>
            <img src="https://images.unsplash.com/photo-1531986627054-7f294d095acd?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img"
                class="object-cover w-full md:w-4/10 aspect-square h-fit bg-zinc-500 rounded-4xl lg:rounded-l-none md:order-2">
        </div>

        <div class="flex flex-col md:flex-row md:justify-end gap-5 md:gap-0">
            <p class="w-full md:w-4/10 text-sm md:text-base lg:text-lg 2xl:text-xl md:pt-15 md:pl-15 md:order-2">
                Kami terbuka untuk siapa saja, baik yang baru mengenal dunia mobil maupun yang sudah lama menjadi bagian
                dari
                komunitas otomotif. Dengan semangat kekeluargaan, kami ingin menciptakan lingkungan yang ramah, inspiratif,
                dan
                penuh semangat untuk semua anggota.
            </p>
            <img src="https://images.unsplash.com/photo-1620971409036-50f8ae011b4f?q=80&w=920&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img"
                class="object-cover w-full md:w-4/10 aspect-square h-fit bg-zinc-500 rounded-4xl md:rounded-bl-none md:rounded-tr-none md:order-1">
            <img src="https://images.unsplash.com/photo-1589553939673-b28b51698b6d?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img"
                class="hidden md:block object-cover bg-zinc-500 rounded-4xl md:rounded-r-none w-3/15 aspect-square self-end ">
        </div>

    </div>

    <!-- events section -->
    <div id="events" class="scroll-mt-25 flex flex-col items-center gap-10">

        <x-subheading>Events</x-subheading>

        <!-- events content -->
        <div data-aos="fade-up" class="grid grid-cols-1 3xl:grid-cols-3 gap-4">

            @foreach ($events->take(4) as $e)
                <div
                    class="bg-gradient-to-tr from-black to-zinc-900 w-full p-2 border border-zinc-800 rounded-2xl overflow-hidden hover:brightness-105 transition">
                    <a href="{{ route('events.show', $e->id) }}"
                        class="flex flex-col md:flex-row 3xl:flex-col h-full w-full hover:scale-105 transition">
                        <img src="{{ asset('storage/' . $e['gambar_event']) }}" alt="{{ $e['nama_event'] }} image"
                            class="flex-1 object-cover bg-zinc-800 rounded-t-xl md:rounded-l-xl overflow-hidden">

                        <div
                            class="flex-1 p-5 flex flex-col gap-5 h-full bg-black border border-zinc-800 rounded-b-xl md:rounded-r-xl overflow-hidden">

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
                                <p class="text-zinc-500 font-semibold line-clamp-5 lg:line-clamp-3 2xl:line-clamp-7">
                                    {{ $e['deskripsi_event'] }}
                                </p>

                            </div>
                        </div>
                    </a>
                </div>

            @endforeach

        </div>

        <x-button-outline1 whereTo="events">Lihat lebih banyak event</x-button-outline1>
    </div>

    <!-- gallery section -->
    <div id="gallery" class="scroll-mt-25 flex flex-col items-center gap-10">
        <x-subheading>Gallery</x-subheading>

        <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-5">

            @foreach ($gallery->take(6) as $g)
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
                                <h3 class="text-lg font-semibold truncate">{{ $g->nama_gallery }}</h3>
                                <p class="text-sm text-zinc-200 truncate">{{ $g->tanggal_gallery }}</p>
                            </div>
                        </div>
                    </a>
                </div>


            @endforeach

        </div>

        <x-button-outline1 whereTo="gallery">Lihat lebih banyak di galeri</x-button-outline1>
    </div>

    <!-- merchandise section -->
    <div id="merchandise" class="scroll-mt-25 flex flex-col items-center gap-10">
        <x-subheading>Merchandise</x-subheading>
        <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-5">

            @foreach ($merchandise->take(6) as $m)
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
                                <h3 class="text-lg font-semibold truncate">{{ $m->nama_merchandise }}</h3>
                                <p class="text-sm text-white font-semibold truncate">{{ $m->harga_merchandise }},00 Rp</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <x-button-outline1 whereTo="merchandise">Lihat lebih banyak merchandise</x-button-outline1>
    </div>


@endsection

@section('footer')