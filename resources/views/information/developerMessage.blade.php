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

            しかし、私がこのアプリを作成するにあたってどうしても取り入れたかった要素は、"信頼度を視覚的な指標で表現する"ことでした。具体的には、信頼度を示す笑顔マークが、返却期限が迫るにつれて、爆弾、点火、と順にアイコンが変化していき、返却期限を過ぎた場合、最終的には爆発アイコンに変化するようになります。
            アイテムを貸してくれた相手を怒らせてしまった、ということを表現しているわけですね。これにより、誰から借りた物を優先的に注意すべきかが一目で分かるようになっています。<br>

            <br>ちなみにこの要素は、某有名恋愛趣味シュミレーションゲームからヒントを得た、というよりほぼ丸パクリのアイディアで、本家では攻略ヒロインに嫌われていくと爆弾が点灯し、MAXまで嫌われると爆弾が爆発、攻略不能になってしまうという要素でした。
            つまり、爆弾アイコンを使いたいがために、「貸した物を管理するアプリ」ではなく「借りた物を管理するアプリ」として開発することにしたのです。適当な理由ですみません。<br>

            <br>話が逸れましたが、初めての本格的な個人開発として、シンプルで直感的なUIに重点を置いて作成しました。皆様からのフィードバックを歓迎し、それをもとにアプリをさらに改善していく予定です。ご意見やご感想は、私のTwitter経由でお待ちしています！
        </p>
    </div>
</x-main>
