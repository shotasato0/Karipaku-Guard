document.addEventListener("DOMContentLoaded", function () {
    // 履歴に初期状態を追加
    history.replaceState({ onHome: true }, null, location.href);

    // ブラウザの戻るや進むボタンが押されたときのイベントリスナー
    window.addEventListener("popstate", function (event) {
        // '戻る'ボタンが押された場合にリダイレクト
        if (event.state && event.state.onHome) {
            location.href = "/"; // ホーム画面のURLに置き換えてください
        }
    });

    // 新しい状態を履歴に追加
    history.pushState(null, null, location.href);
});
