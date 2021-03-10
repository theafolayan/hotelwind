
 <x-guest-layout>

    <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        @foreach ($rooms as $room)
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <div class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('images/'.$room->photo)}}">
                </a>

                <div class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            {{$room->name}}
                        </a>
                    </h1>
                </div>

                <div class="flex  justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">

                        <a class="p-3 bg-purple-300 text-white hover:bg-purple-200 text-sm" href="#">
                            Book Now
                        </a>
                        <p class="text-grey-darker text-sm">
                        $ {{$room->price}} / Night
                    </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </div>
            </div>



        </div>
        @endforeach
        <!-- END Column -->

    </div>
</div>
 </x-guest-layout>
