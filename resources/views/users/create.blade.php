@extends('layouts.layout')
<body class="bg-gray-600 p-10 ">
    <form action="/login" method="POST"
        class=" flex flex-col items-center  mx-auto max-w-lg p-5  shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
        <input type="text" name="username" placeholder="Username"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="email" name="email" placeholder="Email"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="password" name="password" placeholder="Password"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="password" name="repeatpassword" placeholder="Repeat Password"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
            <button type="submit"
            class="bg-white hover:bg-slate-400 px-4 py-2 rounded p-4 m-4 font-bold text-black">signin</button>
            <a href="/login"
            class="hover:font-extrabold p-4 m-4 font-bold  mr-auto text-black"><img src="{{asset('icons/back-arrow.svg')}}" alt="Back arrow" class="w-7"></a>
    </form>
</body>