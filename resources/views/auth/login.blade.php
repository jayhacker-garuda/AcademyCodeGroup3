@extends("layouts.app")


@section("content")

    <div>
        <div class="w-full border-b-2 mb-6 border-white text-center">
            <h1 class="font-bold text-5xl text-white uppercase">
                Welcome Back
            </h1>
        </div>
    </div>
    <div class="flex justify-center">

        <div class="w-4/12 bg-white mt-16 rounded-lg p-5 shadow-2xl">

            @if (session()->has('login_status'))
                <div class=" bg-red-500 p-4 rounded-lg text-white text-center mb-6">
                    {{session('login_status')}}
                </div>
            @endif

            <form method="post" action="{{route("On-Login")}}">
                @csrf


                <div class="mb-4">
                    <label class="sr-only" for="name"> Email </label>
                    <input type="email" placeholder="Enter Email"
                           class="bg-white p-4 w-full rounded-md border-2 border-gray-400 @error('email') border-red-700 @enderror"
                           name="email">
                    @error("email")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label class="sr-only" for="password">Password </label>
                    <input type="password" placeholder="Enter Password"
                           class="bg-white p-4 w-full rounded-md border-2 border-gray-400 @error('password') border-red-700 @enderror"
                           name="password">
                    @error("password")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white p-4 w-full rounded-md shadow-2xl">Login</button>
                </div>

            </form>

        </div>

    </div>

@endsection
