export function initConfirmDelete() {
    // "borrow-delete-form"クラスを持つすべての要素を取得
    document.querySelectorAll(".borrow-delete-form").forEach(form => {
        // 各要素に対してsubmitイベントリスナーを追加
        form.addEventListener("submit", (e) => {
            // デフォルトのフォーム送信を防止
            e.preventDefault();

            // 確認ダイアログを表示し、ユーザーがキャンセルを選んだ場合は処理を中止
            if (!confirm("削除しますか？")) {
                return;
            }

            // フォームを送信
            e.target.submit();
        });
    });
}
