import './bootstrap';
import './search';
import './bomb.js';
import './historyHandler';
import './loginSuccessAlert'
import './logoutSuccessAlert'


// ページが完全にロードされた後に実行
document.addEventListener("DOMContentLoaded", () => {
    // "borrow-delete-form"クラスを持つすべての要素が存在するかどうかをチェック
    if (document.querySelector(".borrow-delete-form")) {
        // 条件が真の場合、confirmdelete.jsを動的にインポート
        import('./confirmdelete').then(({ initConfirmDelete }) => {
            // インポートが完了したら、initConfirmDelete関数を実行
            initConfirmDelete();
        });
    }
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
