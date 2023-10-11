@extends('layouts.layout')

<body class="bg-gray-600 p-10">

    <form action="/upload" method="post" class="flex flex-col items-center  mx-auto max-w-5xl p-5  shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
        <input type="text" name="name" placeholder="Name"
            class="p-4 m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="text" name="quantity" placeholder="Quantity"
            class="p-4 m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="text" name="price" placeholder="Price"
            class="p-4 m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <textarea name="description" placeholder="Description..." cols="30" rows="10"
            class="p-4 m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none"></textarea>
            <div class=" w-full flex justify-start items-center bg-white rounded-lg h-20 px-5">
                <label for="image" class="text-l text-gray-400 font-bold ">Upload an image: </label>
                <input type="file" name="image" class="mx-2">
            </div>
            <div class="flex items-end  justify-end w-full">
            <button type="submit" class="bg-white hover:bg-slate-400 px-4 py-2 rounded p-4 m-4 font-bold text-black">Submit</button>
        </div>
    </form>


</body>