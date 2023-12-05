// 関数 saveKeyword を定義します。この関数はイベント e を引数として受け取ります。
function saveKeyword(e) {
    // デフォルトのイベント動作（ここではフォームの送信）を防止します。
    e.preventDefault();
    // HTMLドキュメントから "js-keyword" IDを持つ要素の値（入力されたキーワード）を取得します。
    var keyword = document.getElementById("js-keyword").value;
    // 取得したキーワードをセッションストレージに "lastKeyword" というキーで保存します。
    sessionStorage.setItem("lastKeyword", keyword);

    // オリジナルのイベントターゲット（ここではフォーム）に対して submit イベントを実行します。
    e.target.submit();
}

// グローバルスコープに saveKeyword 関数を割り当てます。
window.saveKeyword = saveKeyword;

// DOMContentLoaded イベント（HTMLドキュメントの読み込みが完了した時）に対するイベントリスナーを追加します。
document.addEventListener("DOMContentLoaded", function () {
    // ウィンドウの現在のパスが "/search" である場合のみ以下の処理を実行します。
    if (window.location.pathname === "/search") {
        // セッションストレージから "lastKeyword" というキーで保存されている値を取得します。
        var lastKeyword = sessionStorage.getItem("lastKeyword");
        // lastKeyword が存在する場合（null または undefined でない場合）、
        // HTMLドキュメントから "js-keyword" IDを持つ要素の値に lastKeyword を設定します。
        if (lastKeyword) {
            document.getElementById("js-keyword").value = lastKeyword;
        }
    }
});

// 関数 clearKeyword を定義します。この関数はセッションストレージから "lastKeyword" を削除します。
function clearKeyword() {
    sessionStorage.removeItem("lastKeyword");
}

// グローバルスコープに clearKeyword 関数を割り当てます。
window.clearKeyword = clearKeyword;
