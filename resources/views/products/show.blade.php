@extends('layouts.layout')

<div class="flex flex-col items-center  mx-auto mt-20 max-w-5xl p-5  shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
    
    <img src="{{asset('images'.'/'.$product->image)}}" alt="">
    <ul>
        <li><span class="font-bold">Name: </span>{{$product->name}}</li>
        <li><span class="font-bold">Description: </span>{{$product->description}}</li>
        <li><span class="font-bold">In stock: </span>{{$product->quantity}}</li>
        <li><span class="font-bold">Price: $</span>{{$product->price}}</li>
        <a href="{{ url()->previous() }}"><button class="border opacity-80 relative font-bold border-gray-950 px-4 py-2 rounded-md bg-slate-300 hover:bg-slate-500 ">Return</button></a>
    </ul>
</div>