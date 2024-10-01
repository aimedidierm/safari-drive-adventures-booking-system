@extends('layout')

@section('content')

<x-client-navbar />
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Available Tours 🏕️</h5>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @foreach ($tours as $tour)
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="/images/image.png" alt="Tour 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">{{$tour->title}}</h3>
                    <p class="text-gray-600 mt-2">{{$tour->description}}</p>
                    <a href="/tour-details/{{$tour->id}}"
                        class="text-green-600 hover:text-green-700 mt-4 inline-block">Learn
                        More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop