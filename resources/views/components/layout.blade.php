<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Steam 18+ Patch DB' }}</title>

        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="wrapper">
            <x-navbar />
            <main class="is-fullheight">
                <section class="section">
                    <div class="{{$containerClass ?? 'container'}}">
                        {{ $slot }}
                    </div>
                </section>
            </main>
        </div>
        <x-footer />
    </body>
</html>
