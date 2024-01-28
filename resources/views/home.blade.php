<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>借りパクガード</title>
    @include('layouts.partials.head')
</head>


<body class="antialiased">
    <div
        class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div href="/index" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <img src="../../images/bomb.png" alt="アプリのアイコン" class="w-14 sm:w-25 lg:w-40">
                        <h1 class="ml-3 text-3xl font-bold dark:text-gray-200">借りパクガード</h1>
                    </div>
                    <h1 class="text-xl lg:text-2xl mt-6 mb-4 font-semibold">
                        返却日を忘れることなし！<br class="sm:hidden">
                        借りパクガードで簡単管理
                    </h1>
                    <p class="mb-8">
                        このアプリでは、借りたものの情報と共に相手の機嫌をアイコンで表現。普段は笑顔マークですが、期限が迫るにつれ、アイコンが変化。友人との関係を守るための強力なサポートツールです。
                    </p>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center">
                    <div class="grid grid-cols-4 gap-4">
                        <img src="../../images/smile.png" alt="笑顔" class="w-16">
                        <img src="../../images/bomb2.png" alt="爆弾" class="w-16">
                        <img src="../../images/ignition.png" alt="点火" class="w-16">
                        <img src="../../images/explosion.png" alt="爆発" class="w-20">
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="{{ route('login') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded w-32 text-center">
                    ログイン
                </a>
                <a href="{{ route('register') }}"
                    class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded w-32 text-center">
                    新規登録
                </a>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
</body>

</html>
