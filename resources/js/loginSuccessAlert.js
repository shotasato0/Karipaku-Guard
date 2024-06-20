document.addEventListener("DOMContentLoaded", function () {
    const loginAlert = document.getElementById("loginSuccessAlert");
    if (loginAlert) {
        // 表示アニメーションを適用
        loginAlert.classList.add("login-success-alert-visible");

        setTimeout(function () {
            // 消滅アニメーションを適用
            loginAlert.classList.replace(
                "login-success-alert-visible",
                "login-success-alert-hide"
            );
        }, 3000); // 3秒後にアニメーション切替
    }
});
