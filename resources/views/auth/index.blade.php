@extends('layouts.layout')

<body class="bg-gray-600 p-10 ">
    <form action="/login" method="POST"
        class=" flex flex-col items-center  mx-auto max-w-lg p-5  shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
        @csrf
        <input type="text" name="username" placeholder="username or email"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
        <input type="password" name="password" placeholder="password"
            class=" m-2 w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none">
            <button type="submit"
            class="bg-white hover:bg-slate-400 px-4 py-2 rounded p-4 m-4 font-bold text-black">Login</button>
               <hr>
            <div class="flex items-center justify-end w-full">
                <a href="/products"
                class="hover:font-extrabold p-4 m-4 font-bold  mr-auto text-black"><img src="{{asset('icons/back-arrow.svg')}}" alt="Back arrow" class="w-7"></a>
                <a href="/signup"
                class="bg-white hover:bg-slate-400 px-4 py-2 rounded p-4 m-4 font-bold text-black">Signup</a>
        </div>
        @if ($errors->any())

        <div class="flex items-start  justify-start w-full ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <span class="text-red-950 text-lg font-bold">
                            {{ $error }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>
</body>
