document.addEventListener("DOMContentLoaded", function () {
    const logoutAlert = document.getElementById("logoutSuccessAlert");
    if (logoutAlert) {
        // 表示アニメーションを適用
        logoutAlert.classList.add("logout-success-alert-visible");

        setTimeout(function () {
            // 消滅アニメーションを適用
            logoutAlert.classList.replace(
                "logout-success-alert-visible",
                "logout-success-alert-hide"
            );
        }, 3000); // 3秒後にアニメーション切替
    }
});
