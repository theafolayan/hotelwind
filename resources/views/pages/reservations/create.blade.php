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
                    <form method="POST" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Occupant's Name-->
            <div class="my-4">
                <x-label for="occupant_name" :value="__('Occupant\'s Name')" />

                <x-input  class="block mt-1 w-full" type="text" name="occupant_name" :value="old('occupant_name')" required autofocus />
            </div>

            <!-- Occupant's Email-->
            <div class="my-4">
                <x-label for="occupant_email" :value="__('Occupant\'s Email')" />

                <x-input  class="block mt-1 w-full" type="email" name="occupant_email" :value="old('occupant_email')" required  />
            </div>
                 <!-- Occupant's Address-->
            <div class="my-4">
                <x-label for="occupant_address" :value="__('Occupant\'s Address')" />

                <x-input  class="block mt-1 w-full" type="text" name="occupant_address" :value="old('occupant_address')" required  />
            </div>


            <input type="hidden" value="{{$room->id}}" name="room_id"/>


            <!-- Occupant Phone Number-->
            <div class="my-4">
                <x-label for="occupant_phone_number" :value="__('Occupant\'s phone number')" />

                <x-input class="block mt-1 w-full" type="number" name="occupant_phone_number" :value="old('occupant_phone_number')" required />
            </div>
             <!-- Occupant Age-->
            <div class="my-4">
                <x-label for="occupant_age" :value="__('Occupant\'s Age')" />

                <x-input class="block mt-1 w-full" type="number" name="occupant_age" :value="old('occupant_age')" required />
            </div>

            {{-- Date Of Arrival --}}
            <div class="my-4">
                <x-label for="date_of_arrival" :value="__('Date of Arrival')" />

                <x-input class="block mt-1 w-full" type="date" name="date_of_arrival" :value="old('date_of_arrival')" required />
            </div>

              <div class="my-4">
                <x-label for="reservation_note" :value="__('Reservation Note')" />

                <x-textarea class="block mt-1 w-full" name="reservation_note" :value="old('description')" required > </x-textarea>

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
