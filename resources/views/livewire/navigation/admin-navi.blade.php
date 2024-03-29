<div
    class="flex flex-col h-screen px-4 py-8 bg-gradient-to-bl from-gray-900 to-gray-800 border-r dark:bg-gray-800 dark:border-gray-600">
    <h2 class="text-4xl font-extrabold text-blue-600 italic dark:text-white"><span class="text-5xl text-orange-500">Amber</span>Foods
    </h2>

    <div class="flex flex-col justify-between flex-1 mt-10 space-y-4">
        <nav>

            <x-navigation.adminLinks :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">

                <x-slot name="icon">

                    <i class="fas fa-calendar-alt"></i>

                </x-slot>

                {{__('Dashboard')}}

            </x-navigation.adminLinks>

            <div x-data="{ dropdownOpen: true }">

                <x-navigation.adminLinks x-ondropList.window="dropdownOpen = true" :href="route('admin.meals')"
                                         :active="request()->routeIs('admin.meals')">

                    <x-slot name="icon">

                        <i class="far fa-layer-plus"></i>

                    </x-slot>

                    {{__('Meal Information')}}

                </x-navigation.adminLinks>

            </div>

            <hr class="my-6 dark:border-gray-600"/>

            <a class="flex items-center px-4 py-2 mt-5 text-white transition-colors duration-200 transform
            rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-700"
               href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path
                        d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <span class="mx-4 font-medium">Settings</span>
            </a>
        </nav>

    </div>
</div>
