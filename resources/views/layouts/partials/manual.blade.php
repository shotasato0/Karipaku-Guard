<x-main :minHeightClass="'min-h-screen'">
    @section('title', '使い方ガイド - ')
    <div class="container mx-auto p-10 lg:p-20 text-black-800 dark:text-white">
        <h1 class="text-center text-3xl font-bold mb-20">借りパクガードの使い方</h1>

        {{-- ヘッダーセクション --}}
        <div class="flex justify-center mb-20">
            <section class="text-center w-full lg:w-1/2">
                <h2 class="text-xl font-semibold mb-3">アプリ概要</h2>
                <p>借りパクガードは、他者から借りたアイテムを管理するためのアプリです。貸し主、借りた物、借りた日、返却期限を記録し、管理することができます。</p>
            </section>
        </div>

        <!-- 信頼度表示セクション -->
        <div class="flex justify-center mb-10">
            <section class="mb-10 w-full lg:w-1/2">
                <div>
                    <h2 class="text-center text-xl font-semibold mb-3">信頼度表示</h2>
                    <p>返却期限に応じて信頼度アイコンが変化します。初めは笑顔のアイコンですが、返却期限の１週間前になると爆弾アイコンに変化。
                        さらに３日前になると爆弾に火が付き・・・期限を過ぎると大爆発！こうなると相手からの信頼もガタ落ち！？爆弾が爆発する前に借りたものを返そう！</p>
                </div>
                <div class="flex justify-center items-center mt-8">
                    <div class="grid grid-cols-4 gap-2 sm:gap-14 mb-4">
                        <div class="flex flex-col items-center">
                            <img src="../../images/smile.png" alt="笑顔" class="w-16">
                            <p>初期状態</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="../../images/bomb2.png" alt="爆弾" class="w-16">
                            <p>１週間前</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="../../images/ignition.png" alt="点火" class="w-16">
                            <p>３日前</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="../../images/explosion.png" alt="爆発" class="w-16 mr-2 sm:mr-0">
                            <p>期限切れ</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <h2 class="text-center text-xl font-semibold mb-10">その他の機能</h2>
        <!-- 各セクションを横並びに配置 -->
        <div class="flex flex-wrap justify-between">
            <!-- 新規追加セクション -->
            <section class="mb-10 w-full lg:w-1/2 flex flex-col items-center">
                <div class="flex justify-center items-center mb-3">
                    <img src="../../../../images/screen-addition.png" width="400" alt="新規追加画像">
                </div>
                <div style="width: 400px; padding: 0 20px;">
                    <h2 class="text-center text-xl font-semibold mb-3">新規追加</h2>
                    <p>新しい借り物をリストに追加することができます。</p>
                </div>
            </section>

            <!-- リスト表示セクション -->
            <section class="mb-10 w-full lg:w-1/2 flex flex-col items-center">
                <div class="flex justify-center items-center mb-3">
                    <img src="../../../../images/screen-list.png" width="400" alt="リスト表示画像">
                </div>
                <div style="width: 400px; padding: 0 20px;">
                    <h2 class="text-center text-xl font-semibold mb-3">リスト表示</h2>
                    <p>貸し主、借りた物、借りた日、返却期限の一覧を見ることができます。</p>
                </div>
            </section>

            <!-- 貸し主の情報セクション -->
            <section class="mb-10 w-full lg:w-1/2 flex flex-col items-center">
                <div class="flex justify-center items-center mb-3">
                    <img src="../../../../images/screen-information.png" width="395" alt="貸し主の情報画像">
                </div>
                <div style="width: 395px; padding: 0 20px;">
                    <h2 class="text-center text-xl font-semibold mb-3">貸し主の情報</h2>
                    <p>貸し主名をクリックすることで、貸し主の詳細な情報を登録、編集することができます。</p>
                </div>
            </section>

            <!-- 編集・削除セクション -->
            <section class="mb-10 w-full lg:w-1/2 flex flex-col items-center">
                <div class="flex justify-center items-center mb-3">
                    <img src="../../../../images/screen-edit.png" width="395" alt="貸し主の情報画像">
                </div>
                <div style="width: 395px; padding: 0 20px;">
                    <h2 class="text-center text-xl font-semibold mb-3">編集・削除</h2>
                    <p>借り物に関する情報を編集、または削除することができます。</p>
                </div>
            </section>
        </div>
    </div>
</x-main>
