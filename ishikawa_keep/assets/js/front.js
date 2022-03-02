"use-strict";

// ▼ハンバーガーメニュー 表示切り替え▼
$(function () {
  $(".header_wrap_box_nav").click(function () {
    $(this).children().toggleClass("active");
    if ($(".header_wrap_box_nav_line").hasClass("active")) {
      $(".drower").addClass("visible");
      scrollpos = $(window).scrollTop();
      $("body").addClass("fixed").css({ top: -scrollpos });
    } else {
      $(".drower").removeClass("visible");
      $("body").removeClass("fixed").css({ top: 0 });
      window.scrollTo(0, scrollpos);
    }
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
// $(window).on("load", function () {
//     $(".tab_wrap li:first-of-type").addClass("active");
//     $(".area:first-of-type").addClass("is_active");
//     let hashName = location.hash;
//     GethashID(hashName);
// });

//  ===section_fadein==========================================================
$(function () {
  let section = $("#index_under").find("section");
  console.log(section);
  $(section).css({ opacity: "0" });
  $(window).scroll(function () {
    $(section).each(function () {
      var section_h = $(this).offset().top;
      var scr = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scr > section_h - (windowHeight * 4) / 5) {
        $(this).animate({ opacity: 1 }, { duration: 2000, easing: "swing" });
      }
    });
  });
});
//  ===header_scroll=========================================================
$(function () {
  let gnav_h = $(".header_wrap_box").outerHeight();
  $(window).on("load resize", function () {
    $window_w = window.innerWidth;
    console.log($window_w);
    if ($window_w > 768) {
      $(".header_nav_list").css("display", "flex");
      $(window).scroll(function gnav_appearance() {
        var main_h = $(".mainvisual_wrap").outerHeight();
        var footer_h = $("#footer_wrap").offset().top;
        var scr = $(this).scrollTop();
        if (scr > footer_h - gnav_h / 2) {
          $(".header_nav_list").hide();
          // $(".header_nav_list").css("opacity", 0);
        } else if (scr > main_h - gnav_h / 2) {
          $(".header_nav_list").show();
          // $(".header_nav_list").css("opacity", 1);
          $(".header_nav_list").css({ color: "#542912" });
        } else {
          $(".header_nav_list").css({ color: "#fff" });
        }
      });
    } else {
      $(".header_nav_list").hide();
    }
  });
});

//  ===selectbtn_scroll=========================================================
$(function () {
  let selectbtn_h = $(".bottom_box").outerHeight();
  $(window).on("load scroll", function () {
    var height = $(window).height();
    var footer_h = $("#footer_wrap").offset().top;
    var scr = $(this).scrollTop();
    if (scr > footer_h - height) {
      $(".bottom_box").css("opacity", 0);
      $(".bottom_box").css("pointer-events", "none");
    } else if (scr > selectbtn_h) {
      $(".bottom_box").css("opacity", 1);
      $(".bottom_box").css("pointer-events", "auto");
    } else {
      $(".bottom_box").css("opacity", 0);
      $(".bottom_box").css("pointer-events", "none");
    }
  });
});
