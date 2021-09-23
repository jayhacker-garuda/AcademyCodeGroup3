@extends("layouts.app")


@section("content")

    <div class="flex justify-center">

        <div class="w-4/12 bg-gray-200 rounded-lg shadow-2xl">

            <form method="post" action="{{url('/register/store')}}">
                @csrf
                <div class="mb-4 ">
                        @error("name")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror

                    <label class="sr-only" for="name"> Name </label>
                    <input type="text" placeholder="Enter Name" class="bg-white p-4 w-full rounded-md border-2 border-gray-400 @error('name') border-red-700 @enderror" name="name">
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="name"> Email </label>
                    <input type="email" placeholder="Enter Email" class="bg-white p-4 w-full rounded-md border-2 border-gray-400" name="email">
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="tele"> Telephone Number </label>
                    <input type="tel" value="000-0000-000" placeholder="Enter Telephone Number" class="bg-white p-4 w-full rounded-md border-2 border-gray-400" name="tele">
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="password">Password </label>
                    <input type="password" placeholder="Enter Password" class="bg-white p-4 w-full rounded-md border-2 border-gray-400" name="password">
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="password_confirmation"> Verify Password </label>
                    <input type="password" placeholder="Verify Password" class="bg-white p-4 w-full rounded-md border-2 border-gray-400" name="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white p-4 w-full rounded-md shadow-2xl">Register</button>
                </div>

            </form>

        </div>

    </div>

@endsection
