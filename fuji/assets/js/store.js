"use strict";

// ▼画像切り替え▼
$(function () {
    $("#thumbImg img").on("click", function () {
        let img = $(this).attr("src");
        $(".store_img").removeClass("current");
        $(this).parent().addClass("current");
        $("#mainImg img").fadeOut(50, function () {
            $("#mainImg img")
                .attr("src", img)
                .on("load", function () {
                    $(this).fadeIn();
                });
        });
    });
});

// ▼ブックマーク チェック▼
$(function () {
    $(".store_mark").on("click", function () {
        $(this).toggleClass("checked");
    });
});
