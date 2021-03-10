<x-guest-layout>
    <div class='flex max-w-xl my-10 bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='flex items-center w-full'>
            <div class='w-full'>
                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                    <h3 class="text-lg text-bold"> Viewing Room  </h3>
                </div>
                <div class="border-b border-gray-100"></div>
                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'><img class="rounded" src="{{asset('images/'.$room->photo)}}"></div>
                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>{{$room->name}}</div>
                <div class='text-green-600 text-sm mb-2 mx-3 px-2'>${{$room->price}}/Night</div>
                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>{{$room->description}}</div>

                    <a href="#" class="w-full items-center"> <p class="w-full p-3 flex flex-col items-center bg-purple-600 hover:bg-purple-400 text-white"> Book Now</p></a>

            </div>
        </div>
    </div>
</x-guest-layout>
