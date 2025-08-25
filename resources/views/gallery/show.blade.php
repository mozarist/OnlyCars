@extends('layouts.main')

@section('content')

    <div class="flex gap-5 max-w-screen">

        <img src="{{ asset('storage/' . $gallery['gambar_gallery']) }}" alt="gallery img"
            class="w-3/5 h-full object-cover object-center bg-zinc-300 rounded-2xl">

        <div class="w-full flex flex-col gap-5">

            <h5 class="text-2xl text-white font-semibold">
                {{ $gallery['nama_gallery'] }}
            </h5>

            <div class="flex flex-col gap-5 w-full">

                <p>{{ $gallery['tanggal_gallery'] }}</p>

                <div class="flex gap-2 items-center w-full">
                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button-danger>
                            Hapus Data
                        </x-button-danger>
                    </form>
                    <x-button2 WhereTo="{{ route('gallery.edit', $gallery->id) }}">Edit Data</x-button2>
                </div>

            </div>

        </div>

    </div>

@endsection

@section('footer')