<div
    @click.away="isRegister = false"

    class="flex items-center w-screen mx-auto overflow-hidden bg-white rounded-lg shadow-lg  lg:max-w-4xl">

    <form wire:submit.prevent="addUser" class="w-full px-6 py-10 md:px-8 lg:w-full">

        <h2 class="text-4xl font-semibold pb-2 text-center font-bold uppercase text-gray-700 dark:text-white">Join The line</h2>

        <div class="flex items-center justify-between mt-4">

            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

            <span class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 ">Sign Up With Email Below</span>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>

        </div>

        <div class="mt-4">

            <x-input.label for="username" label="Username">

                <x-input.text wire:model="username" class="w-full" :errors="$errors->first('username')"/>

            </x-input.label>

        </div>

        <div class="mt-4">

            <x-input.label for="email" label="Email">

                <x-input.text wire:model="email" class="w-full" :errors="$errors->first('email')"/>

            </x-input.label>

        </div>

        <div class="mt-4">

            <x-input.label for="Password" label="Password">

                <x-input.text wire:model="password" type="password"
                              class="w-full" :errors="$errors->first('password')"/>


            </x-input.label>

        </div>

        <div class="mt-4">

            <x-input.label for="password_confirmation" label="Password Confirmation">

                <x-input.text wire:model="password_confirmation" type="password"
                              class="w-full" :errors="$errors->first('passwordConfirmation')"/>


            </x-input.label>

        </div>


        <div class="mt-8">

           <x-input.submit class="w-full">

               Register Now

           </x-input.submit>

        </div>


    </form>

</div>
