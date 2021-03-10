<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Room') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-6">
        <div class="max-w-7xl mx-auto sm:px-6 sm:mx-3 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Room name-->
            <div class="my-4">
                <x-label for="name" :value="__('Room Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Room price-->
            <div class="my-4">
                <x-label for="price" :value="__('Price per night')" />

                <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus />
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Create Room') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
