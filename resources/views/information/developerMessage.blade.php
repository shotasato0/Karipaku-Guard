<x-main :minHeightClass="'min-h-screen'">
    @section('title', '開発者からのメッセージ - ')
    <div class="container mx-auto p-6 lg:p-20 text-black-800 dark:text-white">
        <h1 class="text-3xl font-bold mb-4">開発者からのメッセージ</h1>
        <br>
        <p class="text-lg">借りパクガードにアクセスいただきありがとうございます。開発者のショウ<a href="https://twitter.com/shoprogramming"
                rel="noopener noreferrer" class="ml-1" target="_blank">（@shoprogramming）</a>
            と申します。<br>
            <br>

            こちらのアプリは、友人や家族、職場の方々から借りたアイテムを管理し、返済期限を把握するためのツールとなっております。思いついたきっかけは、他県に住んでいる兄妹にNintendo
            Switchとソフトを貸したところ、そのまま返ってこなかったという出来事からでした。返せ。<br>
            <br>

            「であれば、借した物を管理するアプリの方が良いのでは？」と思ったそこのあなた！あなたの意見はごもっともです。<br>

            しかし、私がこのアプリを作成するにあたってどうしても取り入れたかった要素は、"信頼度を視覚的な指標で表現する"ことでした。
            これにより、誰から借りた物を優先的に注意すべきかが一目で分かるようになっています。<br>

            <br>ちなみにこの要素は、某有名恋愛シュミレーションゲームからヒントを得た（というよりほぼ丸パ◯リの）アイディアで、本家ではヒロインからの好感度が下がると爆弾が点火、
            さらに下がると爆発して、攻略可能ヒロイン全員の好感度が一気に下がってしまうという要素でした。つまり、爆弾アイコンを使いたいがために、「貸した物を管理するアプリ」ではなく「借りた物を管理するアプリ」として開発することにしたのです。適当な理由ですみません。<br>

            <br>話が逸れましたが、初めての本格的な個人開発として、シンプルで直感的なUIに重点を置いて作成しました。皆様からのフィードバックを歓迎し、それをもとにアプリをさらに改善していく予定です。ご意見やご感想は、私のX（旧Twitter）経由でお待ちしています！
        </p>
        <div class="flex justify-center mt-10">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                data-url="https://karipakuguard.jp" data-text="借りパクガードで借り物を簡単管理。相手からの信頼度を下げないように気をつけよう！"
                data-show-count="false">ポスト</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</x-main>
