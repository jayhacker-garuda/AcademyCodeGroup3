@extends("layouts.admin")

@section("page_title",'Laravel Wip-Admin Students')

@section('content')
    <div class="justify-center p-8 h-full w-full">
        <div>
            <div class="w-full border-b-2 border-white text-center">
                <h1 class="font-bold text-5xl text-white uppercase">
                    Current Enrolled Students
                </h1>
            </div>
        </div>
        <div class=" mt-8 shadow-2xl">
            <table class="min-w-full  border-gray-500 rounded-2xl">
                <thead class="bg-white rounded-2xl">
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Student FullName
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Course
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Enrolled Date
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                        Status
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                        <div class="text-sm leading-5 text-blue-900">Damilare Anjorin</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        Software Programming
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                        Sept 12 2021
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative px-4 uppercase font-bold text-xs">active</span></span>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
