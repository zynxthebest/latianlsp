<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data produk') }}
        </h2>
        <a href="/product/create">
        <x-primary-button class="mt-4">Tambah produk</x-primary-button>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <table class="w-full text-gray-900">
                <thead class="bg-gray-50">
                    <td class="p-2">NO</td>
                    <td class="p-2">NAMA PRODUK</td>
                    <td class="p-2">STOK</td>
                    <td class="p-2">HARGA</td>
                    <td class="p-2">BARCODE</td>
                    <td class="p-2">AKSI</td>
                </thead>
                <tbody>
                    @foreach ($products as $p )
                    <tr class="border-b">
                        <td class="p-2">{{ $loop->iteration }}</td>
                        <td class="p-2">{{ $p->name }}</td>
                        <td class="p-2">{{ $p->stocks }}</td>
                        <td class="p-2">{{ $p->price }}</td>
                        <td class="p-2">{{ $p->barcode }}</td>
                        <td class="p-2"> <a href="/product/{{ $p->id }}/edit">
                        <x-primary-button>Edit</x-primary-button>
                        </a>
                        <form action="/product/{{ $p->id }}" method="POST" class="inline ml-1">
                        @csrf
                        @method('delete')
                        <x-danger-button>Hapus</x-danger-button>
                        </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>
