<div x-data="{ isRegister: false }"
    class="absolute top-0 sticky">

    <nav class="bg-white shadow-md border-b dark:bg-gray-800">

        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">

            <div class="flex items-center justify-between">

                <div>

                    <a class="text-2xl font-bold italic lg:text-3xl text-blue-600" href="#"><span
                            class="text-orange-500">Amber</span>Foods</a>

                </div>

                <!-- Mobile menu button -->
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">

                <div class="flex items-center py-2 -mx-1 md:mx-0">

                    <a @click.prevent=" isRegister = !isRegister "
                        class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 md:mx-0 md:w-auto"
                       href="#">Join free</a>

                </div>

            </div>

        </div>

    </nav>

    <div x-show="isRegister"
         @keydown.esc.window="isRegister = false"
         x-transition.duration.300ms
        class="flex items-center fixed top-0 bottom-0
               w-screen h-screen mx-auto bg-black bg-opacity-75">

        @livewire('auth.register')

    </div>

</div>

