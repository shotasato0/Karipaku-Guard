document.addEventListener("DOMContentLoaded", function () {
    // すべてのメニューボタンの参照を取得
    const menuButtons = document.querySelectorAll("[id^='menu-button-']");

    menuButtons.forEach((button) => {
        // 対応するドロップダウンメニューの参照を取得
        const dropdownMenu = document.querySelector(
            `.dropdown-menu[aria-labelledby='${button.id}']`
        );

        // ボタンクリック時のイベントリスナーを設定
        button.addEventListener("click", function () {
            // メニューの表示状態を切り替える
            dropdownMenu.style.display =
                dropdownMenu.style.display === "none" ? "block" : "none";
        });
    });
});
