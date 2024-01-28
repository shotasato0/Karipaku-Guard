<x-main :minHeightClass="'min-h-screen'">

    <body class="antialiased">
        <div class="container mx-auto p-6 lg:p-20 text-black-800 dark:text-white">
            <h1 class="text-2xl font-bold mb-4">借りパクガードの使い方</h1>

            {{-- ヘッダーセクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">アプリ概要</h2>
                <p>借りパクガードは、他者から借りたアイテムを管理するためのアプリです。貸し主、借りた物、借りた日、返却期限を記録し、管理することができます。</p>
            </section>

            {{-- 機能説明セクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">主要機能とその使い方</h2>
                <ol class="list-decimal ml-5">
                    <li>リスト表示 - 貸し主、借りた物、借りた日、返却期限の一覧を見ることができます。</li>
                    <li>貸し主の情報 - 貸し主名をクリックすることで、貸し主の詳細な情報を登録、編集することができます。</li>
                    <li>信頼度表示 - 返却期限に応じて信頼度がビジュアル化されます。</li>
                    <li>編集・削除 - 借り物に関する情報を編集、または削除することができます。</li>
                    <li>新規追加 - 新しい借り物をリストに追加することができます。</li>
                </ol>
            </section>

            {{-- スクリーンショットセクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">スクリーンショット</h2>
                {{-- ここにスクリーンショットを挿入 --}}
            </section>

            {{-- FAQセクション --}}
            <section class="mb-10">
                <h2 class="text-xl font-semibold mb-3">よくある質問</h2>
                <dl class="ml-5">
                    <dt class="font-semibold mb-2">Q: アプリの登録は必要ですか？</dt>
                    <dd class="mb-5">A: いいえ、ユーザー登録は必要ありませんが、アプリへのログイン情報がないと、
                        アプリを閉じてしまった際に情報が保存されません。情報を保存しておきたいのであればログインして使用されることをお勧めします。</dd>
                    <!-- 他の質問と回答を追加 -->
                </dl>
            </section>
        </div>
    </body>

</x-main>
