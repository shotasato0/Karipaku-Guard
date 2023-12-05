const borrowDeleteElement = document.getElementById("js-borrow-delete");

if (borrowDeleteElement) {
    borrowDeleteElement.addEventListener("submit", (e) => {
        e.preventDefault();

        if (!confirm("削除しますか？")) {
            return;
        }

        e.target.submit();
    });
} else {
    console.log("Element with ID 'js-borrow-delete' not found");
}
