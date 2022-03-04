"use-strict";

// ▼ハンバーガーメニュー 表示切り替え▼
$(function () {
    $(".header_wrap_box_nav").on("click", function () {
        $(this).children().toggleClass("active");
    });
});

// ▼ドロワーメニュー開閉▼
$(function () {
    $(".header_wrap_box_nav").on("click", function () {
        $(".drower").toggleClass("visible");
    });
});

// ▼店舗情報セクション／タブ切り替え▼
function GethashID(hashIDName) {
    if (hashIDName) {
        $(".tab_wrap li")
            .find("a")
            .each(function () {
                let idName = $(this).attr("href");
                if (idName == hashIDName) {
                    let parentElm = $(this).parent();
                    $(".tab_wrap li").removeClass("active");
                    $(parentElm).addClass("active");
                    $(".area").removeClass("is_active");
                    $(hashIDName).addClass("is_active");
                }
            });
    }
}

$(".tab_item").on("click", function () {
    let idName = $(this).attr("href");
    GethashID(idName);
    return false;
});

// ページを読み込んだとき（初期状態）は「飲む」タブとエリアを表示
$(window).on("load", function () {
    $(".tab_wrap li:first-of-type").addClass("active");
    $(".area:first-of-type").addClass("is_active");
    let hashName = location.hash;
    GethashID(hashName);
});
