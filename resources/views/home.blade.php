<x-main :tilte="'カスタムタイトル'">

    @section('title')
        {{ isset($title) ? $title : 'デフォルトタイトル' }}
    @endsection

    @section('content')
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center">
                <!-- 左側のセクション -->
                <div class="w-full lg:w-1/2 px-4">
                    <div class="text-left mb-6">
                        <h1 class="text-3xl font-bold">借りパクガード</h1>
                        <!-- アイコン（後で画像パスを入れてください） -->
                        <img src="/path/to/icon.png" alt="アイコン" class="h-12">
                    </div>
                    <p>ここにアプリの説明文を入れます。</p>
                    <div class="mt-6">
                        <a href="{{ route('login') }}"
                            class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg mr-4">ログイン</a>
                        <a href="{{ route('register') }}"
                            class="bg-green-500 text-white font-bold py-3 px-6 rounded-lg">新規登録</a>
                    </div>
                </div>

                <!-- 右側のセクション -->
                <div class="w-full lg:w-1/2 px-4">
                    <div class="text-left mb-6">
                        <h2 class="text-xl font-bold">チュートリアル</h2>
                        <!-- チュートリアル画像（後で画像パスを入れてください） -->
                        <img src="/path/to/tutorial-image.png" alt="チュートリアル画像" class="w-full rounded-lg shadow-lg">
                    </div>
                    <p>ここにチュートリアルの説明文を入れます。</p>
                </div>
            </div>
        </div>
    @endsection
</x-main>
