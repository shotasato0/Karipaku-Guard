function r(){document.querySelectorAll(".borrow-delete-form").forEach(t=>{t.addEventListener("submit",e=>{e.preventDefault(),confirm("削除しますか？")&&e.target.submit()})})}export{r as initConfirmDelete};
