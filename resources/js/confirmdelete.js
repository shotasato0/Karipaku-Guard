document.getElementById("js-borrow-delete").addEventListener("submit", (e) => {
    e.preventDefault();

    if (!confirm("削除しますか？")) {
        return;
    }

    e.target.submit();
});
