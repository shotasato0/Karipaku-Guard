<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- 子ビューの@sectionと繋がっている --}}
    <title>@yield('title')借りパクガード</title>
    @include('layouts.partials.head')
</head>

<body class="antialiased">
    {{-- header --}}
    @include('layouts.partials.header')

    {{-- main --}}
    <div
        class="relative sm:flex sm:justify-center sm:items-center  {{ $minHeightClass ?? 'min-h-three-quarters' }}
        bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @include('layouts.partials.auth-navigation')
        {{ $slot }}
    </div>
    {{-- information --}}
    @include('layouts.partials.information')

    {{-- footer --}}
    @include('layouts.partials.footer')
</body>

</html>
