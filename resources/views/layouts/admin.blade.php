<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Administration') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>

<div class="flex">
    <div class="w-3/12">
        @livewire('navigation.admin-navi')
    </div>
    <div class="w-9/12 p-3 bg-gray-200 h-screen overflow-auto">
        @yield('content')
    </div>
</div>

@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script></body>
</html>
