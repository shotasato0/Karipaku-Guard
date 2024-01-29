<x-main :minHeightClass="'min-h-screen'">

    <body class="antialiased">
        <div class="container mx-auto p-6 lg:p-20 text-black-800 dark:text-white">
            <h1 class="text-2xl font-bold mb-4">借りパクガードの使い方</h1>

            {{-- ヘッダーセクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">アプリ概要</h2>
                <p>借りパクガードは、他者から借りたアイテムを管理するためのアプリです。貸し主、借りた物、借りた日、返却期限を記録し、管理することができます。</p>
            </section>

            <!-- リスト表示セクション -->
            <section class="mb-10 flex flex-wrap">
                <!-- 機能説明 -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-semibold mb-3">リスト表示</h2>
                    <p>貸し主、借りた物、借りた日、返却期限の一覧を見ることができます。</p>
                </div>
                <!-- 対応する画像 -->
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <a href="../../../../images/screen-list.png" target="_blank">
                        <img src="../../../../images/screen-list.png" width="300" alt="リスト表示画像">
                    </a>
                </div>
            </section>

            <!-- 貸し主の情報セクション -->
            <section class="mb-10 flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-semibold mb-3">貸し主の情報</h2>
                    <p>貸し主名をクリックすることで、貸し主の詳細な情報を登録、編集することができます。</p>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <a href="../../../../images/screen-information.png" target="_blank">
                        <img src="../../../../images/screen-information.png" width="300" alt="貸し主の情報画像">
                    </a>
                </div>
            </section>

            <!-- 信頼度表示セクション -->
            <section class="mb-10 flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-semibold mb-3">信頼度表示</h2>
                    <p>返却期限に応じて信頼度がビジュアル化されます。</p>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <a href="ここに信頼度表示画像のURL" target="_blank">
                        <img src="ここに信頼度表示画像のURL" width="300" alt="信頼度表示画像">
                    </a>
                </div>
            </section>

            <!-- 編集・削除セクション -->
            <section class="mb-10 flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-semibold mb-3">編集・削除</h2>
                    <p>借り物に関する情報を編集、または削除することができます。</p>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <a href="ここに編集・削除画像のURL" target="_blank">
                        <img src="ここに編集・削除画像のURL" width="300" alt="編集・削除画像">
                    </a>
                </div>
            </section>

            <!-- 新規追加セクション -->
            <section class="mb-10 flex flex-wrap">
                <div class="w-full lg:w-1/2">
                    <h2 class="text-xl font-semibold mb-3">新規追加</h2>
                    <p>新しい借り物をリストに追加することができます。</p>
                </div>
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <a href="../../../../images/screen-addition.png" target="_blank">
                        <img src="../../../../images/screen-addition.png" width="300" alt="新規追加画像">
                    </a>
                </div>
            </section>

            {{-- FAQセクション --}}
            <!-- ...他のセクション... -->
        </div>
    </body>
</x-main>
