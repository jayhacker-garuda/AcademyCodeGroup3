@extends("layouts.app")

@section("page_title")
    Laravel Wip - User Profile
@endsection

@section("content")



    <div class="flex justify-center">


        <div class="w-4/12 bg-gray-200 rounded-lg shadow-2xl">

            <h1 class="text-4xl font-bold text-center">Update Profile</h1>
            <h3 class="text-md text-center mb-2">Use the form below to edit your profile</h3>


        @if (session()->has('update_status'))
                <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                    {{session('update_status')}}
                </div>
            @endif

            <form method="post" action="{{route('On-Update')}}">
                @csrf
                <div class="mb-4 ">

                    <label class="sr-only" for="name"> Name </label>
                    <input type="text" value="{{$userInfo->name}}" class="bg-white p-4 w-full rounded-md border-2 border-gray-400 @error('name') border-red-700 @enderror" name="name">
                    @error("name")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="name"> Email </label>
                    <input disabled type="email" value="{{$userInfo->email}}" class="bg-gray-300 p-4 w-full rounded-md border-2 border-gray-400 @error('email') border-red-700 @enderror" name="email">
                    @error("email")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="tele"> Telephone Number </label>
                    <input type="tel" value="{{$userInfo->tele}}" class="bg-white p-4 w-full rounded-md border-2 border-gray-400 @error('tele') border-red-700 @enderror" name="tele">
                    @error("tele")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>




                <div>
                    <button type="submit" class="bg-blue-500 text-white p-4 w-full rounded-md shadow-2xl">Update</button>
                </div>

            </form>

        </div>

    </div>
@endsection
