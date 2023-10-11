<div x-data="{
    open: false,
    toggle() {
        if (this.open) {
            return this.close()
        }

        this.$refs.button.focus()

        this.open = true
    },
    close(focusAfter) {
        if (!this.open) return

        this.open = false

        focusAfter && focusAfter.focus()
    }
}" x-on:keydown.escape.prevent.stop="close($refs.button)"
    x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']" class="relative">
    <div class="bg-gray-500 text-white h-20">
        <nav class=" mx-auto py-4 flex justify-between items-center">
            <form action="/search" method="GET"
                class="flex items-center space-x-2 flex-grow mx-22 max-w-5xl ml-20 mr-10 min-w-min hidden sm:flex">
                @csrf
                <input type="text"
                    class="border border-gray-300 p-2 rounded-lg  focus:ring focus:ring-gray-800 text-black font-bold focus:outline-none
                      flex-grow ">
                <button type="submit"
                    class="bg-white  border-gray-500 font-bold py-2 px-4 rounded  flex-shrink-0 hover:bg-gray-400 transition duration-300">
                    <img src="{{ asset('icons/magnifying_glass.svg') }}" alt="Magnifying Glass Icon" class="w-6 h-6">
                </button>
            </form>
            <a href="/upload"
                class="hover:text-gray-800 transition duration-300 ease-in-out ml-auto hidden sm:flex font-bold text-xl">Upload</a>
            <a href="/login"
                class="hover:text-gray-800 transition duration-300 ease-in-out ml-5 mr-10 hidden sm:flex font-bold text-xl">Login</a>
            <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')"
                type="button" class="">
                <img src="{{ asset('icons/burger-menu.svg') }}" alt="menu button" class="w-14 h-14  sm:hidden mx-5 ">
            </button>
        </nav>
    </div>
    <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)"
        :id="$id('dropdown-button')" style="display: none;"
        class="absolute left-0 w-full mt-[-10px]  rounded-md sm:hidden shadow-md">
        <div class="bg-gray-500 text-white h-50 y">
            <nav class="  py-4  px-4 flex  items-center flex-col">
                <form action="/search" method="GET"
                    class="flex items-center justify-between space-x-1 flex-grow w-full mx-10 max-w-5xl   min-w-min ">
                    @csrf
                    <input type="text"
                        class="border p-2 rounded-lg  focus:ring focus:ring-gray-800  text-black font-bold focus:outline-none
                              flex-grow ">
                    <button type="submit"
                        class="bg-white  font-bold py-2 px-4  rounded-lg flex-shrink-0 hover:bg-gray-400 transition mx-10 duration-300">
                        <img src="{{ asset('icons/magnifying_glass.svg') }}" alt="Magnifying Glass Icon"
                            class="w-6 h-6">
                    </button>
                </form>
                <a href="/upload"
                    class="hover:text-gray-800 transition duration-300 ease-in-out  mt-5 sm:flex font-bold text-xl">Upload</a>
                <a href="/login"
                    class="hover:text-gray-800 transition duration-300 ease-in-out mt-5 sm:flex font-bold text-xl">Login</a>
            </nav>
        </div>
    </div>
</div>
