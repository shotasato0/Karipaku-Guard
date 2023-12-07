import './bootstrap';
import './search';
// "js-borrow-delete"というIDを持つ要素が存在するかどうかをチェック
if (document.getElementById("js-borrow-delete")) {
    // 条件が真の場合、confirmdelete.jsを動的にインポート
    import('./confirmdelete').then(({ initConfirmDelete }) => {
        // インポートが完了したら、initConfirmDelete関数を実行
        initConfirmDelete();
    });
}

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
