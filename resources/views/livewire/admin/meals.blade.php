<section class="text-gray-600 body-font">

    <h1 class="text-4xl  p-3 border-b border-gray-200 font-semibold italic">
        Meal Information
    </h1>

    <div x-data="{ OpenModal: false }"
         x-on:close-modal.window="OpenModal = false"
         x-on:oModal.window="OpenModal = true"
         class="flex flex-col space-y-8">

        <div class="relative flex flex-col my-10 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

            <div class="rounded-t mb-0 px-4 py-3 border-0">

                <div class="flex flex-wrap items-center">

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">

                        <h3 class="font-semibold text-base text-blueGray-700">Students Meal Information</h3>

                    </div>

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                        <button wire:click.prevent="addCategory()"
                                class="bg-green-500 text-white active:bg-green-600 shadow transition duration-300 scale-100
                        transform hover:scale-105 focus:scale-95 text-xs font-bold uppercase px-3
                        py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">

                            Create New Category

                        </button>

                    </div>

                </div>

            </div>

            <x-table>

                <x-slot name="header">

                    <x-table.head> Category</x-table.head>

                    <x-table.head> Action</x-table.head>


                </x-slot>

                <x-table.body>

                    @forelse($meals as $meal)

                        <x-table.row>

                            <x-table.data> {{ $meal->category_nm }} </x-table.data>

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

                            <x-table.data colspan="2" class="w-full text-center">

                                No Meal Option Found

                            </x-table.data>

                        </x-table.row>

                    @endforelse

                </x-table.body>

            </x-table>


        </div>

        <div class="relative flex flex-col my-10 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">

            <div class="rounded-t mb-0 px-4 py-3 border-0">

                <div class="flex flex-wrap items-center">

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">

                        <h3 class="font-semibold text-base text-blueGray-700">Students Meal Information</h3>

                    </div>

                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                        <button @click.prevent="OpenModal = !OpenModal"
                                class="bg-green-500 text-white active:bg-green-600 shadow transition duration-300 scale-100
                        transform hover:scale-105 focus:scale-95 text-xs font-bold uppercase px-3
                        py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">

                            Create New Meal Option

                        </button>

                    </div>

                </div>

            </div>

            <x-table>

                <x-slot name="header">

                    <x-table.head> Category</x-table.head>

                    <x-table.head> Option Name</x-table.head>

                    <x-table.head> Action</x-table.head>


                </x-slot>

                <x-table.body>

                    @forelse($options as $option)

                        <x-table.row>

                            <x-table.data> {{ $option->category_nm }} </x-table.data>

                            <x-table.data></x-table.data>

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

                                No Meal Option Found

                            </x-table.data>

                        </x-table.row>

                    @endforelse

                </x-table.body>

            </x-table>


        </div>

        <div x-show="OpenModal"
             @keydown.esc.window="OpenModal = false"
             x-transition.duration.300ms
             class="fixed flex items-center justify-center bg-black bg-opacity-75 h-screen w-screen top-0 bottom-0 left-0 ">

            @if($newCategory)

                <x-modal.form wire:submit.prevent="storeCategory"
                              @click.away.window="OpenModal = false"
                              title="New Meal Category">

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">

                        <div class="grid grid-cols-1 space-x-2">
                            <x-input.label for="category_nm" label="Category Name">

                                <x-input.text wire:model="category_nm" :errors="$errors->first('category_nm')"/>

                            </x-input.label>

                        </div>


                    </div>

                    <div class="grid grid-cols-1">

                        <x-input.submit>

                            Create

                        </x-input.submit>


                    </div>

                </x-modal.form>

            @else

            <x-modal.form wire:submit.prevent="storeCategory"
                          @click.away.window="OpenModal = false"
                          title="New Meal Option">

                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">

                    <div class="grid grid-cols-1 space-x-2">

                        <x-input.label for="category_nm" label="Select Meal Category">

                            <x-input.select wire:model="category_nm" :errors="$errors->first('category_nm')">

                                <option> Please Select Category</option>

                                @forelse($categories as $category)

                                    <option wire:model="category_id"> {{ $category->category_nm }} </option>

                                @empty

                                    <option> No Category Found</option>

                                @endforelse

                            </x-input.select>

                        </x-input.label>

                    </div>

                    <div class="grid grid-cols-1 space-x-2">

                        <x-input.label for="category_nm" label="Meal Option Name">

                            <x-input.text wire:model="option_nm" :errors="$errors->first('option_nm')"/>

                        </x-input.label>

                    </div>


                </div>

                <div class="grid grid-cols-1">

                    <x-input.submit>

                        Create

                    </x-input.submit>


                </div>

            </x-modal.form>

            @endif

        </div>

    </div>


</section>
