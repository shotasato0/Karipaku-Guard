document.querySelectorAll("[data-trust-score]").forEach((element) => {
    const daysUntilDeadline = parseInt(element.dataset.trustScore);

    const smileImage = element.querySelector(".js-smile");
    const bombImage = element.querySelector(".js-bomb");
    const ignitionImage = element.querySelector(".js-ignition");
    const explosionImage = element.querySelector(".js-explosion");

    if (daysUntilDeadline < 0) {
        smileImage.style.display = "none";
        bombImage.style.display = "none";
        ignitionImage.style.display = "none";
        explosionImage.style.display = "block";
    } else if (daysUntilDeadline < 3) {
        smileImage.style.display = "none";
        bombImage.style.display = "none";
        ignitionImage.style.display = "block";
        explosionImage.style.display = "none";
    } else if (daysUntilDeadline < 7) {
        smileImage.style.display = "none";
        bombImage.style.display = "block";
        ignitionImage.style.display = "none";
        explosionImage.style.display = "none";
    }
});
