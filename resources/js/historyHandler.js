// DOMContentLoadedイベントが発生した時（HTMLドキュメントが読み込まれ、解析が完了した時）に、指定された関数を実行
document.addEventListener("DOMContentLoaded", function () {
    // window.performanceとwindow.performance.navigationが存在し、
    // ユーザーが「戻る」または「進む」ボタンでページにアクセスした場合、
    // ページをリロードする
    if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
        window.location.reload();
    }
});