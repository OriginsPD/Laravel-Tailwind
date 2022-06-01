<section class="py-1 w-full">

    <h1 class="text-4xl mb-8 p-3 border-b border-gray-200 font-semibold italic">
        Dashboard
    </h1>

    <div x-data="{ modalOpen: false }"
         x-on:close-modal.window="modalOpen = false"
         class="w-full flex mt-24 mb-12 xl:mb-0 px-4 mx-auto">

        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

            <div class="rounded-t mb-0 px-4 py-3 border-0">

                <div class="flex flex-wrap items-center">

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">

                        <h3 class="font-semibold text-base text-blueGray-700">Students Information</h3>

                    </div>

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                        <button @click="modalOpen = !modalOpen"
                                class="bg-green-500 text-white active:bg-green-600 shadow transition duration-300 scale-100
                        transform hover:scale-105 focus:scale-95 text-xs font-bold uppercase px-3
                        py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">

                            Add Student

                        </button>

                    </div>

                </div>

            </div>

            <x-table>

                <x-slot name="header">

                    <x-table.head> Student Name</x-table.head>

                    <x-table.head> Email</x-table.head>

                    <x-table.head></x-table.head>

                </x-slot>

                <x-table.body>

                    @forelse($students as $student)

                        <x-table.row>

                            <x-table.data> {{ $student->username }} </x-table.data>

                            <x-table.data> {{ $student->email }} </x-table.data>

                            <x-table.data class="space-x-2">

                                <a href="#" class="text-white font-bold shadow py-1 px-3 rounded
                                                    text-xs bg-green-500 hover:bg-green-600">

                                    Edit

                                </a>

                                <a href="#" class="text-white font-bold shadow py-1 px-3 rounded
                                                   text-xs bg-blue-500 hover:bg-blue-600">

                                    View

                                </a>

                            </x-table.data>

                        </x-table.row>

                    @empty

                        <x-table.row>

                            <x-table.data colspan="3" class="w-full text-center">

                                No Students Found

                            </x-table.data>

                        </x-table.row>

                    @endforelse

                </x-table.body>

            </x-table>


        </div>

        <div x-show="modalOpen"
             @keydown.esc.window="modalOpen = false"
             x-transition.duration.300ms
             class="fixed flex items-center justify-center bg-black bg-opacity-75 h-screen w-screen top-0 left-0 ">

            <x-modal.form @click.away.window="modalOpen = false"
                          wire:submit.prevent="addStudent"
                          title="New Student Information">

                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">

                    <div class="grid grid-cols-2 space-x-2">
                        <x-input.label for="username" label="Username">

                            <x-input.text wire:model="username" :errors="$errors->first('username')"/>

                        </x-input.label>

                        <x-input.label for="email" label="Email">

                            <x-input.text wire:model="email" :errors="$errors->first('email')"/>

                        </x-input.label>
                    </div>

                    <div class="grid grid-cols-1">
                        <x-input.label for="password" label="Generated Password">

                            <x-input.text wire:model="password" class="w-full" readonly
                                          :errors="$errors->first('password')"/>

                        </x-input.label>
                    </div>

                </div>

                <div class="grid grid-cols-2">
                    <x-input.submit>

                        Create Student

                    </x-input.submit>

                    <x-input.submit class="bg-gray-200 ">

                        Cancel

                    </x-input.submit>

                </div>


            </x-modal.form>

        </div>

    </div>

</section>
