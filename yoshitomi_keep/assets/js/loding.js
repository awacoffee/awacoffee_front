function loaded() {
    document.getElementById("loading").classList.remove("active");
}
window.addEventListener("load", function () {
    setTimeout(loaded, 3100);
});

setTimeout(loaded, 8000);

window.onload = function () {
    document.querySelector("svg").classList.add("start");
};

// 動画の再生スタートを調整
$("#main_movie")
    .delay(3000)
    .queue(function (next) {
        $("#main_movie").get(0).play();
        next();
    });
