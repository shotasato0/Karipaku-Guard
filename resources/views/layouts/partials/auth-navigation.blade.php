@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            @if (Auth::user()->is_guest)
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                            focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    ログイン
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                                focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        新規登録
                    </a>
                @endif
            @else
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline
                            focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    ダッシュボード
                </a>
            @endif
        @else
            <!-- 未認証ユーザー向けのリンク -->
            <a href="{{ route('login') }}" class="...">ログイン</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="...">新規登録</a>
            @endif
        @endauth
    </div>
@endif
