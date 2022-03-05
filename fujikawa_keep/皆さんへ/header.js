"use-strict";

//  ===header_scroll=========================================================

$(function () {
  let before_scr = 0;
  $(window).on("load resize", function () {
    var header_h = $(".header_pc_bgc").outerHeight();
    var mainv_h = $(".mainvisual_wrap").outerHeight();
    var footer_h = $("#footer_wrap").offset().top;
    $(window).scroll(function headerfun() {
      var scr = $(this).scrollTop();
      // 5分の1は適当
      if (scr > footer_h - header_h / 2) {
        $(".header_pc_bgc").addClass("none");
      } else if (scr > mainv_h - header_h / 5) {
        $(".header_pc_bgc").removeClass("none");
        $(".header_pc_bgc").addClass("bgc_white");
        if (scr < before_scr) {
          $(".header_pc_bgc").removeClass("up");
          $(".header_pc_bgc").addClass("down");
        } else {
          $(".header_pc_bgc").removeClass("down");
          $(".header_pc_bgc").addClass("up");
        }
      } else {
        $(".header_pc_bgc").removeClass("bgc_white");
      }
      before_scr = $(this).scrollTop();
    });
  });
});

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
