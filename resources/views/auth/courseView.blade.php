@extends("layouts.app")


@section("content")
<div class="container mx-auto mt-15 px-10">
        <div id="dataDiv" class="mb-10 space-x-4">
            @forelse ($courses as $course )
                <div class="w-96 inline-block mt-28 bg-white rounded-xl overflow-hdden shadow-md p-4">
                    <div class="p-4">
                        <div class="flex justify-between">
                            <h1 class="text-gray-900 text-xl font-serif font-bold leading-normal mt-0 mb-2">
                                {{ $course->course_name }}
                            </h1>
                            <div>
                                <span class="mt-8 bg-green-600 p-2 rounded shadow-md hover:bg-green-400">
                                    {{ $course->categories->course_type }}
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-700 text-base font-light leading-relaxed mt-0 mb-4">
                            <!-- to display the de  -->
                            {{ $course->categories->desc }} 
                        </p>
                    </div>
                </div>
            @empty
                <div class="w-96 flex-row mt-28 bg-white rounded-xl overflow-hdden shadow-md p-4">
                    Empty
                </div>
            @endforelse

        </div>
    </div>
@endsection
