@extends("layouts.admin")

@section("page_title",'Laravel Wip-Admin Students')

@section('content')
    <div class="justify-center p-8 h-full w-full">
        <div>
            <div class="w-full border-b-2 border-white text-center">
                <h1 class="font-bold text-5xl text-white uppercase">
                    Create New Course
                </h1>
            </div>
        </div>
        <div class=" mt-8 ">
            <div class="relative py-3 w-11/12 max-w-xl sm:mx-auto">
                <div class=" p-8 bg-white shadow-sm sm:rounded-xl">
                    <h1 class="mb-3 ml-4 text-xl font-bold">Add Course Information</h1>
                    <form class="w-full ">
                        <div class="mb-5 relative">
                            <input type="text" id="courses_name" class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent" autocomplete="off" />
                            <label for="courses_name" class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Courses Name</label>
                        </div>
                        <div class="mb-5 relative">
                            <select name="category" id="category" class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3  placeholder-transparent" >
                                <option value=""> Courses Category Here </option>
                            </select>
                            <label for="category" class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Category</label>
                        </div>
                        <button onclick="javascript:void(0);" class="w-full bg-indigo-600 text-white p-3 rounded-md">Create Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
