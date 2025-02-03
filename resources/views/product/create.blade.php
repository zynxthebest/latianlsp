<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('product.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <x-text-input id="name" class="block mt-1 w-full p-2" type="name" name="name"
                                :value="old('name')" required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <x-input-label for="name" :value="__('Stock')" />
                            <x-text-input id="stocks" class="block mt-1 w-full p-2" type="stocks" name="stocks"
                                :value="old('stocks')" required />
                            <x-input-error :messages="$errors->get('stocks')" class="mt-2" />
                            <x-input-label for="name" :value="__('price')" />
                            <x-text-input id="price" class="block mt-1 w-full p-2" type="price" name="price"
                                :value="old('price')" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            <x-input-label for="name" :value="__('kode barcode')" />
                            <x-text-input id="barcode" class="block mt-1 w-full p-2" type="barcode" name="barcode"
                                :value="old('barcode')" required />
                            <x-input-error :messages="$errors->get('barcode')" class="mt-2" />
                            <x-primary-button class="mt-2">
                                {{ __('simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
