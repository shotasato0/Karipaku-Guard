// 関数 saveKeyword を定義する。この関数はイベント e を引数として受け取る。
function saveKeyword(e) {
    // デフォルトのイベント動作（ここではフォームの送信）を防止。
    e.preventDefault();
    // HTMLドキュメントから "js-keyword" IDを持つ要素の値（入力されたキーワード）を取得。
    var keyword = document.getElementById("js-keyword").value;
    // 取得したキーワードをセッションストレージに "lastKeyword" というキーで保存。
    sessionStorage.setItem("lastKeyword", keyword);

    // オリジナルのイベントターゲット（ここではフォーム）に対して submit イベントを実行。
    e.target.submit();
}

// グローバルスコープに saveKeyword 関数を割り当てる。
window.saveKeyword = saveKeyword;

// DOMContentLoaded イベント（HTMLドキュメントの読み込みが完了した時）に対するイベントリスナーを追加。
document.addEventListener("DOMContentLoaded", function () {
    // ウィンドウの現在のパスが "/search" である場合のみ以下の処理を実行。
    if (window.location.pathname === "/search") {
        // セッションストレージから "lastKeyword" というキーで保存されている値を取得する。
        var lastKeyword = sessionStorage.getItem("lastKeyword");
        // lastKeyword が存在する場合（null または undefined でない場合）、
        // HTMLドキュメントから "js-keyword" IDを持つ要素の値に lastKeyword を設定する。
        if (lastKeyword) {
            document.getElementById("js-keyword").value = lastKeyword;
        }
    }
});

// 関数 clearKeyword を定義。この関数はセッションストレージから "lastKeyword" を削除。
function clearKeyword() {
    sessionStorage.removeItem("lastKeyword");
}

// グローバルスコープに clearKeyword 関数を割り当てる。
window.clearKeyword = clearKeyword;
