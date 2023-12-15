document.addEventListener('DOMContentLoaded', function() {
    // 信頼スコアに基づいて画像の表示を更新
    function updateImages(trustScore, bombElement, ignitionElement, explosionElement) {
        if (trustScore <= 50 && trustScore > 0) {
            bombElement.classList.add('hidden');
            ignitionElement.classList.remove('hidden');
            explosionElement.classList.add('hidden');
        } else if (trustScore === 0) {
            bombElement.classList.add('hidden');
            ignitionElement.classList.add('hidden');
            explosionElement.classList.remove('hidden');
        } else {
            bombElement.classList.remove('hidden');
            ignitionElement.classList.add('hidden');
            explosionElement.classList.add('hidden');
        }
    }

    // 信頼スコアと対応する画像を含むすべての要素を選択
    const trustScoreElements = document.querySelectorAll('[data-trust-score]');

    trustScoreElements.forEach((element) => {
        const trustScore = parseInt(element.getAttribute('data-trust-score'));
        const bombElement = element.querySelector('#js-bomb');
        const ignitionElement = element.querySelector('#js-ignition');
        const explosionElement = element.querySelector('#js-exprosion');

        updateImages(trustScore, bombElement, ignitionElement, explosionElement);
    });
});
