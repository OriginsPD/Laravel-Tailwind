@props([
    'model_nm'
])

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">
        {{ $model_nm }}
    </h2>

    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

            <x-input.label for="username" label="Username">

                <x-input.text wire:model="username" :errors="$errors->first('username')" />

            </x-input.label>

           <x-input.label for="email" label="Email">

                <x-input.text wire:model="email" :errors="$errors->first('email')" />

            </x-input.label>

            <x-input.label for="password" label="Generated Password">

                <x-input.text wire:model="password" readonly :errors="$errors->first('password')"/>

            </x-input.label>

        </div>

        <x-input.submit>

            Create Student

        </x-input.submit>

    </form>
</section>
