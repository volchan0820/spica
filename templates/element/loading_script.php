<script>
window.addEventListener("load", () => {

    const loading = document.getElementById("loading");
    const logo = document.querySelector(".loading-logo");

    if (!loading || !logo) return;

    // 初回だけ表示
    // if (sessionStorage.getItem("loaded")) {
    //     loading.style.display = "none";
    //     return;
    // }
    // sessionStorage.setItem("loaded", "true");

    // ロゴを表示
    setTimeout(() => {
        logo.classList.add("is-show");
    }, 100);

    // ロゴを消す
    setTimeout(() => {
        logo.classList.remove("is-show");
        logo.classList.add("is-hide");
    }, 900);

    // 背景を消す
    setTimeout(() => {
        loading.classList.add("is-hide");
    }, 1250);

});
</script>