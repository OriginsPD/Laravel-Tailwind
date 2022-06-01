@props([
    'active' => false
])

@php

$classes = ($active ?? false)
                     ? 'flex items-center px-4 py-2 my-5 text-gray-700 bg-gray-200 rounded-md '
                     : 'flex items-center px-4 py-2 my-5 text-white transition-colors duration-200 transform rounded-md
                        hover:bg-gray-200 hover:text-gray-700'

@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >

   {{ $icon }}

    <span class="mx-4 font-medium">

        {{ $slot }}

    </span>
</a>
