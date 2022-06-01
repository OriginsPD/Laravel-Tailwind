<div>
    <!-- Component Start -->
    <form wire:submit.prevent="onLogin" class="flex flex-col bg-white rounded-md shadow-lg p-12 mt-12" action="">

        <x-input.label for="email" label="Email">

            <x-input.text wire:model="email" :errors="$errors->first('email')"/>

        </x-input.label>

        <x-input.label for="password" label="Password">

            <x-input.text wire:model="password" type="password"
                          :errors="$errors->first('password')"/>

        </x-input.label>

       <x-input.submit>

           Login

       </x-input.submit>

        <div class="flex mt-6 justify-center text-xs">

        </div>

    </form>

    <!-- Component End  -->
</div>
