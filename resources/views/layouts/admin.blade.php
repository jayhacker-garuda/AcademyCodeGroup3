<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page_title")</title>
</head>
<body>

<div class=" w-screen h-screen flex">

    <div class=" bg-white p-4 h-full border-r-2 border-grey-500 w-2/12">
        <div class="border-b-2 border-blue-700 mb-6 w-full tracking-wide">
            <h1 class="text-3xl uppercase font-extrabold text-center text-blue-600 ">Admin</h1>
        </div>
        <ul>
            <a href="{{ route('Admin') }}"><li class="py-2 px-2 bg-blue-600 text-white cursor-pointer">Dashboard</li></a>
            <a href="{{ route('Admin.student') }}"><li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Enrolled Students</li></a>
            <a href="{{ route('Admin.courses') }}"><li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Available Courses</li></a>
            <a href="{{ route('Admin.category') }}"><li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course Category</li></a>
{{--            <li class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer">Course Selection</li>--}}
            <form action="{{ route('Logout') }}" method="POST">
                @csrf
                <button><li class="absolute bottom-4 py-2 px-16 text-center bg-blue-600 duration-300 text-white uppercase cursor-pointer">Logout</li></button>
            </form>

        </ul>
    </div>
    <div class="w-10/12 h-full flex justify-center items-center overflow-y-scroll bg-blue-500">

        <div class="h-full w-full">
            @yield("content")
        </div>

    </div>

</div>



</body>
</html>
