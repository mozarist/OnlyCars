@extends('layouts.main')


@include('layouts.hero')

@section('content')

    <!-- about section -->
    <div id="about" class="scroll-mt-25">
        <x-subheading>About Us</x-subheading>
    </div>


    <div class="flex flex-col">

        <div data-aos="fade-up" class="flex flex-col md:flex-row justify-between gap-5">
            <div class="space-y-5 w-2/5 p-10">
                <h6 class="text-2xl font-semibold">
                    Siapa Kami?
                </h6>
                <p class="text-xl">
                    OnlyCars adalah komunitas pecinta mobil yang hadir untuk menghubungkan para penggemar otomotif dari
                    berbagai
                    latar belakang. Kami percaya bahwa setiap mobil memiliki cerita, dan setiap pemiliknya punya passion
                    yang
                    ingin
                    dibagikan.
                </p>
            </div>
            <img src="https://images.unsplash.com/photo-1754502167745-4539921387f7?q=80&w=386&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img" class="object-cover w-3/5 h-130 bg-zinc-500 rounded-2xl lg:rounded-l-none">
        </div>

        <div data-aos="fade-left" class="flex flex-col md:flex-row justify-between gap-5">
            <p class="w-3/5 text-xl p-10 md:order-2">
                Sejak berdiri, OnlyCars menjadi ruang untuk berbagi pengalaman, bertukar informasi, dan menikmati
                kebersamaan
                dalam dunia otomotif. Dari sekadar diskusi ringan tentang modifikasi, tips perawatan, hingga konvoi dan
                acara
                kumpul bersama, semua itu menjadi bagian dari identitas kami.
            </p>
            <img src="https://images.unsplash.com/photo-1531986627054-7f294d095acd?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img" class="object-cover w-1/2 h-115 bg-zinc-500 rounded-2xl lg:rounded-r-none md:order-1">
        </div>

        <div data-aos="fade-right" class="flex flex-col md:flex-row justify-start gap-5">
            <p class="w-2/5 text-xl p-10">
                Kami terbuka untuk siapa saja, baik yang baru mengenal dunia mobil maupun yang sudah lama menjadi bagian
                dari
                komunitas otomotif. Dengan semangat kekeluargaan, kami ingin menciptakan lingkungan yang ramah, inspiratif,
                dan
                penuh semangat untuk semua anggota.
            </p>
            <img src="https://images.unsplash.com/photo-1576709350718-7df53805fd9b?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="car img" class="object-cover w-2/5 h-100 bg-zinc-500 rounded-2xl md:rounded-l-none">
        </div>

    </div>

    <!-- events section -->
    <div id="events" class="scroll-mt-25">
        <x-subheading>Events</x-subheading>
    </div>

    <!-- events content -->
    <div class="grid grid-cols-1 md:grid-cols-2 ">

        @foreach ($event as $e)
        
        @endforeach

    </div>

    <!-- gallery section -->
    <div id="gallery" class="scroll-mt-25">
        <x-subheading>Gallery</x-subheading>
    </div>

    <!-- merchandise section -->
    <div id="merchandise" class="scroll-mt-25">
        <x-subheading>Merchandise</x-subheading>
    </div>


@endsection

@section('footer')