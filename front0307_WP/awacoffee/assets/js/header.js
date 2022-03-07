"use-strict";

//  ===header_scroll=========================================================

$(function () {
    let before_scr = 0;
    // $(window).on("load resize", function () {
    var header_h = $(".header_inner_bg").outerHeight();
    var mainv_h = $(".mainvisual_wrap").outerHeight();
    var footer_h = $("#footer_wrap").offset().top;
    $(window).scroll(function headerfun() {
        var scr = $(this).scrollTop();
        if (scr > footer_h - header_h / 2) {
            $(".header_inner_bg").addClass("none");
        } else if (scr > mainv_h - header_h) {
            $(".header_inner_bg").removeClass("none");
            $(".header_inner_bg").addClass("bgc_white");
            if (scr < before_scr) {
                $(".header_inner_bg").removeClass("up");
                $(".header_inner_bg").addClass("down");
            } else {
                $(".header_inner_bg").removeClass("down");
                $(".header_inner_bg").addClass("up");
            }
        } else {
            $(".header_inner_bg").removeClass("bgc_white");
        }
        before_scr = $(this).scrollTop();
    });
});
// });

//  ===topbutton=========================================================
$(function () {
    var mainv_h = $(".mainvisual_wrap").outerHeight();
    $(window).scroll(function headerfun() {
        var scr = $(this).scrollTop();
        if (scr > mainv_h) {
            $(".js-scroll").addClass("none");
            $(".js-pagetop").removeClass("none");
        } else {
            $(".js-pagetop").addClass("none");
            $(".js-scroll").removeClass("none");
        }
    });

    $("#top_to_button").click(function () {
        $("body,html").animate({ scrollTop: 0 }, 800, "swing");
        return false;
    });
});
