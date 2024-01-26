<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - 借りパクガード</title>
    @include('layouts.partials.head')
</head>

<body class="font-sans text-gray-900 antialiased">
    {{-- @include('layouts.partials.header') --}}
    <div
        class="min-h-screen flex flex-col justify-start sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <img src="../../images/bomb.png" alt="アプリのアイコン" class="w-14 sm:w-25 lg:w-40">
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    @include('layouts.partials.footer')
</body>

</html>
