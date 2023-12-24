<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
@section('title', $title)

<body class="antialiased">
    {{-- header --}}
    @include('layouts.partials.header')

    {{-- main --}}
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @include('layouts.partials.auth-navigation')
        {{ $slot }}
    </div>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 my-4 flex flex-wrap text-base justify-center">
        <a class="mr-5 hover:text-gray-900">よくある質問</a>
        <a class="mr-5 hover:text-gray-900">プライバシーポリシーと利用規約</a>
        <a class="mr-5 hover:text-gray-900">お問い合わせ</a>
    </nav>

    {{-- footer --}}
    @include('layouts.partials.footer')
</body>

</html>
