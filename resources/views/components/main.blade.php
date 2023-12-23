<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
@section('title', $title)

<body class="antialiased">
    {{-- header --}}
    <header class="text-gray-600 body-font bg-gray-200">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="{{route('borrows.index')}}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="../../images/bomb.png" alt="説明" class="w-14 sm:w-25 lg:w-40">
                <h1 class="ml-3 text-3xl font-bold">借りパクガード</h1>
            </a>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900 font-bold">アプリの説明</a>
            </nav>
        </div>
    </header>

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

    <footer class="text-gray-600 body-font">
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center">© 2023 Karipaku Guard —
                    <a href="https://twitter.com/shoprogramming" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank">@shoprogramming</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-4 h-5" viewBox="0 0 24 24">
                            <path
                                d="M14.258 10.152L23.176 0h-2.113l-7.747 8.813L7.133 0H0l9.352 13.328L0 23.973h2.113l8.176-9.309 6.531
                                9.309h7.133zm-2.895 3.293l-.949-1.328L2.875 1.56h3.246l6.086 8.523.945 1.328 7.91 11.078h-3.246zm0 0" />
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
</body>

</html>
