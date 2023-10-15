@extends('layouts.layout')
@section('content')

    <body class="">
        @include('components._header')
        <div class="flex flex-wrap justify-center">
            @foreach ($products as $product)
                <div class="mx-10 border-2 flex flex-col items-center w-full sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  p-2  my-8 rounded-lg hover:transform hover:scale-105 transition-transform duration-300 shadow-[rgba(50,_50,_105,_0.15)_0px_2px_5px_0px,_rgba(0,_0,_0,_0.05)_0px_1px_1px_0px]">
                    <img src="{{ asset('images/' . $product->image) }}" class="w-full my-auto" alt="{{ 'an image of ' . $product->name }}">
                    <a href="/{{ $product->id }}" class="mt-2">
                        <button class="border opacity-80 relative font-bold border-gray-950 px-4 py-2 rounded-md bg-slate-300 hover:bg-slate-500">Details</button>
                    </a>
                </div>
            @endforeach
        </div>
    </body>
@endsection
