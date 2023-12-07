export function initConfirmDelete() {
    // "js-borrow-delete"というIDを持つ要素を取得
    const element = document.getElementById("js-borrow-delete");

    // 要素が存在するかどうかをチェック
    if (element) {
        // 要素に対してsubmitイベントリスナーを追加
        element.addEventListener("submit", (e) => {
            // デフォルトのフォーム送信を防止
            e.preventDefault();

            // 確認ダイアログを表示し、ユーザーがキャンセルを選んだ場合は処理を中止
            if (!confirm("削除しますか？")) {
                return;
            }

            // フォームを送信
            e.target.submit();
        });
    }
}

