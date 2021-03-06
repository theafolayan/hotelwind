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
                    <form method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Room name-->
            <div class="my-4">
                <x-label for="name" :value="__('Room Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Room price-->
            <div class="my-4">
                <x-label for="price" :value="__('Price per night')" />

                <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
            </div>

              <div class="my-4">
                <x-label for="price" :value="__('Room Description')" />

                <x-textarea class="block mt-1 w-full" name="description" :value="old('description')" required > </x-textarea>

            </div>
            <div class="my-4">
                <x-label for="image" :value="__('Upload product image')" />

                <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
            </div>

            <div class="flex items-center justify-center mt-4">
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
