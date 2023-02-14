<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Authenticate | Canada Weight Loss Diva</title>

        <!-- Scripts -->
        @wireUiScripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        @stack('styles')
    </head>
    <body>

        {{ $slot }}

        <x-notifications position="bottom-right" />

        @livewireScripts
    </body>
</html>
