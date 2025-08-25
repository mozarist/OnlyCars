@extends('layouts.main')

@section('content')

    <div class="flex gap-5 max-w-screen">

        <img src="{{ asset('storage/' . $merchandise['gambar_merchandise']) }}" alt="merchandise img"
            class="w-3/5 h-full object-cover object-center bg-zinc-300 rounded-2xl">

        <div class="w-full flex flex-col gap-5">

            <h5 class="text-2xl text-white font-semibold">
                {{ $merchandise['nama_merchandise'] }}
            </h5>

            <div class="flex flex-col gap-5 w-full">

                <p class="text-lg font-semibold">{{ $merchandise['harga_merchandise'] }},00 Rp</p>

                <hr class="text-zinc-800">

                <p class="text-lg text-zinc-300">{{ $merchandise['deskripsi_merchandise'] }}</p>

                <div class="flex gap-2 items-center w-full">
                    <form action="{{ route('merchandise.destroy', $merchandise->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button-danger>
                            Hapus Data
                        </x-button-danger>
                    </form>
                    <x-button2 WhereTo="{{ route('merchandise.edit', $merchandise->id) }}">Edit Data</x-button2>
                </div>

            </div>

        </div>

    </div>

@endsection

@section('footer')
