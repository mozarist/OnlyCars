@extends('layouts.main')

@section('navbar')

    @include('layouts.hero')

@section('content')

    <div id="about" class="scroll-m-25">
        <x-subtitle>About Us</x-subtitle>
    </div>


    <div class="flex flex-col md:flex-row justify-between items-center gap-5">
        <p class="w-3/5">
            OnlyCars adalah komunitas pecinta mobil yang hadir untuk menghubungkan para penggemar otomotif dari berbagai
            latar belakang. Kami percaya bahwa setiap mobil memiliki cerita, dan setiap pemiliknya punya passion yang ingin
            dibagikan.
        </p>
        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="car img" class="object-cover w-2/5 h-[20vh] bg-zinc-500 rounded-2xl">
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center gap-5">
        <p class="w-3/5 md:order-2">
            Sejak berdiri, OnlyCars menjadi ruang untuk berbagi pengalaman, bertukar informasi, dan menikmati kebersamaan
            dalam dunia otomotif. Dari sekadar diskusi ringan tentang modifikasi, tips perawatan, hingga konvoi dan acara
            kumpul bersama, semua itu menjadi bagian dari identitas kami.
        </p>
        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="car img" class="object-cover w-2/5 h-[20vh] bg-zinc-500 rounded-2xl md:order-1">
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center gap-5">
        <p class="w-3/5">
            Kami terbuka untuk siapa saja—baik yang baru mengenal dunia mobil maupun yang sudah lama menjadi bagian dari
            komunitas otomotif. Dengan semangat kekeluargaan, kami ingin menciptakan lingkungan yang ramah, inspiratif, dan
            penuh semangat untuk semua anggota.
        </p>
        <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="car img" class="object-cover w-2/5 h-[20vh] bg-zinc-500 rounded-2xl">
    </div>

    <div id="events" class="scroll-m-25">
        <x-subtitle>Events</x-subtitle>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 ">
        
    </div>

    <div id="gallery" class="scroll-m-25">
        <x-subtitle>Galeri</x-subtitle>
    </div>

    <div id="merchandise" class="scroll-m-25">
        <x-subtitle>Merchandise</x-subtitle>
    </div>


@endsection

@section('footer')
