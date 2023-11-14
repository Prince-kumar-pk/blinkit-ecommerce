@extends('master')

@section('content')
<div class="container mt-8">
    <div class="flex items-center">
        <div class="w-3/4">
            <img class="h-78 object-cover w-[70%] rounded-lg" src="{{ $product['gallery'] }}" alt="{{ $product['name'] }}">
        </div>
        
        <div class="w-1/2 pl-8">
            <a href="/" class="text-blue-500 hover:underline">Go Back</a>
            <h2 class="text-3xl font-bold mt-4">{{ $product['name'] }}</h2>
            <h5 class="font-semibold text-gray-600 my-2">Price: ${{ $product['price'] }}</h5>
            <p class="text-gray-700">{{ $product['description'] }}</p>
            <h5 class="mt-4">Category: {{ $product['category'] }}</h5>

            <form action="/add_to_cart" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
