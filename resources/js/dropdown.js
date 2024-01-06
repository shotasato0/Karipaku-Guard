document.addEventListener("DOMContentLoaded", function () {
    const menuButtons = document.querySelectorAll("[id^='menu-button-']");
    const dropdownMenus = document.querySelectorAll(".dropdown-menu");

    // メニューボタンに対するクリックイベントリスナー
    menuButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            // プルダウンメニューの表示切り替え
            const dropdownMenu = document.querySelector(
                `.dropdown-menu[aria-labelledby='${button.id}']`
            );
            dropdownMenu.style.display =
                dropdownMenu.style.display === "none" ? "block" : "none";

            // イベントの伝播を停止
            event.stopPropagation();
        });
    });

    // ドキュメント全体のクリックイベントリスナー
    document.addEventListener("click", function (event) {
        const isClickInsideMenuButton = Array.from(menuButtons).some((button) =>
            button.contains(event.target)
        );
        const isClickInsideDropdownMenu = Array.from(dropdownMenus).some(
            (menu) => menu.contains(event.target)
        );

        if (!isClickInsideMenuButton && !isClickInsideDropdownMenu) {
            // プルダウンメニュー以外をクリックした場合、全てのプルダウンメニューを閉じる
            dropdownMenus.forEach((menu) => {
                menu.style.display = "none";
            });
        }
    });
});
