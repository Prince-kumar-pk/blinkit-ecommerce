@extends('master')

@section('content')
<div class="flex justify-evenly mt-8">
    <div>
        <h2 class="text-2xl font-bold mb-6 text-gray-800 underline ">Search Results....</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($products as $item)
            <a href="/detail/{{$item['id']}}" class="block bg-white border border-gray-200 rounded-lg overflow-hidden transition duration-300 transform hover:scale-105">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{$item['name']}}</h3>
                    <p class="text-gray-600">{{$item['description']}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
