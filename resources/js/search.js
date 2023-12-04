function saveKeyword(e) {
    // console.log();
    e.preventDefault();
    var keyword = document.getElementById("js-keyword").value;
    sessionStorage.setItem("lastKeyword", keyword);
    // console.log("Saved keyword: " + keyword);
    e.target.submit();
}

// グローバルスコープに関数を設定
window.saveKeyword = saveKeyword;

document.addEventListener("DOMContentLoaded", function () {
    // console.log(lastKeyword);
    // 検索結果ページに遷移した際の処理
    if (window.location.pathname === "/search") {
        var lastKeyword = sessionStorage.getItem("lastKeyword");
        if (lastKeyword) {
            document.getElementById("js-keyword").value = lastKeyword;
            // console.log('DOMContentLoaded event fired');
        }
    } else {
        sessionStorage.removeItem("lastKeyword");
    }

    // ブラウザの戻るボタンの挙動を検知
    window.addEventListener("popstate", function () {
        console.log('popstate event fired');
        sessionStorage.removeItem("lastKeyword");
        document.getElementById("js-keyword").value = '';
    });
});

function clearKeyword() {
    sessionStorage.removeItem("lastKeyword");
}

// グローバルスコープに関数を設定
window.clearKeyword = clearKeyword;
