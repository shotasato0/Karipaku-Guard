<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- HTMLの開始タグで、言語属性にアプリケーションのロケール（言語設定）を設定 -->

<head>
    <title>ダッシュボード - 借りパクガード</title> <!-- ページのタイトルを設定 -->
    @include('layouts.partials.head') <!-- head部分の共通コンポーネントをインクルード -->
</head>

<body class="font-sans antialiased"> <!-- bodyタグの開始、フォントとアンチエイリアスのスタイルを適用 -->
    @include('layouts.partials.header') <!-- ヘッダー部分の共通コンポーネントをインクルード -->

    <div class="min-h-three-quarters bg-gray-100 dark:bg-gray-900"> <!-- ページコンテンツのラッパー、背景色と最小高さを設定 -->
        @include('layouts.navigation') <!-- ナビゲーションバーの共通コンポーネントをインクルード -->

        <!-- Page Heading -->
        @if (isset($header))
            <!-- $header変数が設定されているかどうかをチェック -->
            <header class="bg-white shadow"> <!-- ヘッダーセクション、背景色と影を設定 -->
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> <!-- コンテナサイズとパディングを設定 -->
                    {{ $header }} <!-- ヘッダー内容を動的に表示 -->
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }} <!-- メインコンテンツを動的に表示 -->
        </main>
    </div>
    @include('layouts.partials.footer') <!-- フッター部分の共通コンポーネントをインクルード -->
</body>

</html>
