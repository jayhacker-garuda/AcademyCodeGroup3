@extends("layouts.app")


@section("content")
    <div class="flex h-screen blue-600" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-2xl font-semibold text-white uppercase md:text-4xl">Welcome <span class="text-black ">Gurūpu3 Academy</span></h2>
                <p class="mt-2 text-sm text-white md:text-base">Lorem ipsum dolor it amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                <div class="flex justify-center lg:justify-start mt-6">
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path: polygon(100% 0%, 100% 48%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);">
            <div class="h-full object-cover" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/4/4b/BC_Campus_Green.jpg)">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>

@endsection
