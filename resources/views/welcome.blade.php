@extends('layouts.main')


@include('layouts.hero')

@section('content')

    <!-- about section -->
    <div id="about" class="scroll-mt-25">
        <x-subheading>About Us</x-subheading>
    </div>


    <div data-aos="fade-up" class="flex flex-col">

        <div class="flex flex-col md:flex-row justify-start gap-5 md:gap-0">
            <div class="space-y-5 w-full md:w-4/10 md:p-15 md:order-2">
                <h6 class="text-2xl font-semibold">
                    Siapa Kami?
                </h6>
                <p class="text-lg">
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
            <p class="w-full md:w-4/10 text-lg md:pt-15 md:pr-15 md:order-1">
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
            <p class="w-full md:w-4/10 text-lg md:pt-15 md:pl-15 md:order-2">
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