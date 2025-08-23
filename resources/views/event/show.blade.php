@extends('layouts.main')

@section('content')

    <div class="flex flex-col gap-5">

        <img src="{{ asset('storage/' . $events['gambar_event']) }}" alt="event img"
            class="w-full aspect-5/2 object-cover object-center bg-zinc-300 rounded-2xl">

        <h5 class="text-2xl text-white font-semibold">
            {{ $events['nama_event'] }}
        </h5>

        <hr class="text-zinc-800">

        <div class="flex gap-5">

            <div class="flex flex-col gap-5 w-1/3">

                <div class="space-y-2 text-zinc-300">

                    <p>{{ $events['tanggal_event'] }}</p>
                    <p>{{ $events['lokasi_event'] }}</p>

                </div>

                <div class="flex gap-2 items-center">
                    <form action="{{ route('events.destroy', $events->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button-danger>
                            Hapus Data
                        </x-button-danger>
                    </form>
                    <x-button2 WhereTo="{{ route('events.edit', $events->id) }}">Edit Data</x-button2>
                </div>

            </div>

            <p class="text-zinc-300 w-2/3">
                {{ $events['deskripsi_event'] }}
            </p>

        </div>

    </div>
    
@endsection

@section('footer')