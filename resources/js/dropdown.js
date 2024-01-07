document.addEventListener("DOMContentLoaded", function () {
    const menuButtons = document.querySelectorAll("[id^='menu-button-']");
    const dropdownMenus = document.querySelectorAll(".dropdown-menu");

    menuButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();

            // 対象のプルダウンメニューを取得
            const dropdownMenu = document.querySelector(
                `.dropdown-menu[aria-labelledby='${button.id}']`
            );

            // 他のすべてのドロップダウンメニューを閉じる
            dropdownMenus.forEach((menu) => {
                if (menu !== dropdownMenu) {
                    menu.classList.add("hidden");
                }
            });

            // 対象のメニューの表示・非表示をトグル
            dropdownMenu.classList.toggle("hidden");

            // イベントの伝播を停止
            event.stopPropagation();
        });
    });

    // ドキュメント全体のクリックイベントリスナー
    document.addEventListener("click", function () {
        // プルダウンメニュー以外をクリックした場合、全てのプルダウンメニューを閉じる
        dropdownMenus.forEach((menu) => {
            menu.classList.add("hidden");
        });
    });
});
