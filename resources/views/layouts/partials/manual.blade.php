<x-main :minHeightClass="'min-h-screen'">

    <body class="antialiased">
        <div class="container mx-auto p-6 lg:p-20 text-black-800 dark:text-white">
            <h1 class="text-2xl font-bold mb-4">借りパクガードの使い方</h1>

            {{-- ヘッダーセクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">アプリ概要</h2>
                <p>借りパクガードは、他者から借りたアイテムを管理するためのアプリです。貸し主、借りた物、借りた日、返却期限を記録し、管理することができます。</p>
            </section>

            <!-- 信頼度表示セクション -->
            <div class="flex justify-center">
                <section class="mb-10 w-full lg:w-1/2">
                    <div class="flex justify-center items-center mb-3">
                        <div class="grid grid-cols-4 gap-4 mb-4">
                            <img src="../../images/smile.png" alt="笑顔" class="w-16">
                            <img src="../../images/bomb2.png" alt="爆弾" class="w-16">
                            <img src="../../images/ignition.png" alt="点火" class="w-16">
                            <img src="../../images/explosion.png" alt="爆発" class="w-20">
                        </div>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-3 text-center">信頼度表示</h2>
                        <p>返却期限に応じて信頼度がビジュアル化されます。<br>初めは笑顔マークですが、返却期限の１週間前になると爆弾マークに変化します。
                            さらに３日前になると爆弾に点火・・・期限を過ぎると爆発してしまいます。爆弾が爆発する前に借りたものを返そう！</p>
                    </div>
                </section>
            </div>


            <!-- 各セクションを横並びに配置 -->
            <div class="flex flex-wrap justify-between">

                <!-- リスト表示セクション -->
                <section class="mb-10 w-full lg:w-1/2 flex flex-col">
                    <div class="flex justify-center items-center mb-3">
                        <img src="../../../../images/screen-list.png" width="400" alt="リスト表示画像">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-3 text-center">リスト表示</h2>
                        <p>貸し主、借りた物、借りた日、返却期限の一覧を見ることができます。</p>
                    </div>
                </section>

                <!-- 編集・削除セクション -->
                <section class="mb-10 w-full lg:w-1/2 flex flex-col">
                    <div class="flex justify-center items-center mb-3">
                        <img src="../../../../images/screen-edit.png" width="395" alt="貸し主の情報画像">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-3 text-center">編集・削除</h2>
                        <p>借り物に関する情報を編集、または削除することができます。<br>（画像は編集画面になります）</p>
                    </div>
                </section>

                <!-- 新規追加セクション -->
                <section class="mb-10 w-full lg:w-1/2 flex flex-col">
                    <div class="flex justify-center items-center mb-3">
                        <img src="../../../../images/screen-addition.png" width="400" alt="新規追加画像">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-3 text-center">新規追加</h2>
                        <p>新しい借り物をリストに追加することができます。</p>
                    </div>
                </section>

                <!-- 貸し主の情報セクション -->
                <section class="mb-10 w-full lg:w-1/2 flex flex-col">
                    <div class="flex justify-center items-center mb-3">
                        <img src="../../../../images/screen-information.png" width="395" alt="貸し主の情報画像">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold mb-3 text-center">貸し主の情報</h2>
                        <p>貸し主名をクリックすることで、貸し主の詳細な情報を登録、編集することができます。</p>
                    </div>
                </section>

            </div>

            {{-- FAQセクション --}}
            <!-- ...他のセクション... -->

        </div>
    </body>
</x-main>
