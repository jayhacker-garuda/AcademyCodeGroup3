@extends("layouts.admin")

@section("page_title",'Laravel Wip-Admin Students')

@section('content')
    <div class="justify-center p-8 h-full w-full">
        <div>
            <div class="w-full border-b-2 border-white text-center">
                <h1 class="font-bold text-5xl text-white uppercase">
                    Current Courses
                </h1>
            </div>
        </div>
        <div class=" mt-8 shadow-2xl">
            <table class="min-w-full  border-gray-500 rounded-2xl">
                <thead class="bg-white rounded-2xl">
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Course Name
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Award
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Category
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Start Date
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        End Date
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr>
                    <td colspan="4" class="px-6 py-4 whitespace-no-wrap border-b bg-gray-400 border-gray-500">
                        <div class="text-xl leading-5 font-bold text-white"> Create New Course</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b bg-gray-400 border-gray-500 text-sm leading-5">
                        <a href="{{ route('Admin.create.courses') }}"><button
                            class="px-5 py-2 shadow-2xl border-white border text-white rounded transition duration-300 hover:bg-white hover:text-black focus:outline-none">
                            New Courses
                        </button></a>
                    </td>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="text-sm leading-5 text-blue-900">{{ $course->course_name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        Level 1 Certificate
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        {{ $course->categories->course_type }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                        Sept 12 2021
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                        March 28 2022
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
