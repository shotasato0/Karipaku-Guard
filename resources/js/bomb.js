// すべての要素を選択し、それぞれに対して関数を実行します。これらの要素は "data-trust-score" というデータ属性を持っています。
document.querySelectorAll("[data-trust-score]").forEach((element) => {
    // 各要素の "data-trust-score" 属性から値を取得し、整数に変換します。これは期限までの日数を表す
    const daysUntilDeadline = parseInt(element.dataset.trustScore);

    // "js-smile" クラスを持つ要素を探し、変数に代入。これは「笑顔」のイメージを表す。
    const smileImage = element.querySelector(".js-smile");
    // "js-bomb" クラスを持つ要素を探し、変数に代入。これは「爆弾」のイメージを表す。
    const bombImage = element.querySelector(".js-bomb");
    // "js-ignition" クラスを持つ要素を探し、変数に代入。これは「点火」のイメージを表す。
    const ignitionImage = element.querySelector(".js-ignition");
    // "js-explosion" クラスを持つ要素を探し、変数に代入。これは「爆発」のイメージを表す。
    const explosionImage = element.querySelector(".js-explosion");

    // 期限が過ぎている場合（daysUntilDeadline < 0）、笑顔、爆弾、点火のイメージを非表示にし、爆発のイメージを表示。
    if (daysUntilDeadline < 0) {
        smileImage.style.display = "none";
        bombImage.style.display = "none";
        ignitionImage.style.display = "none";
        explosionImage.style.display = "block";
    }
    // 期限が3日未満の場合、笑顔、爆弾のイメージを非表示にし、点火のイメージを表示。
    else if (daysUntilDeadline < 3) {
        smileImage.style.display = "none";
        bombImage.style.display = "none";
        ignitionImage.style.display = "block";
        explosionImage.style.display = "none";
    }
    // 期限が7日未満の場合、笑顔のイメージを非表示にし、爆弾のイメージを表示。
    else if (daysUntilDeadline < 7) {
        smileImage.style.display = "none";
        bombImage.style.display = "block";
        ignitionImage.style.display = "none";
        explosionImage.style.display = "none";
    }
});
