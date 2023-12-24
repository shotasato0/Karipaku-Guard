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
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                        focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                        focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        ログイン
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                            focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            登録
                        </a>
                    @endif
                @endauth
            </div>
        @endif
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
