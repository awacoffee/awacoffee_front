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

//  ============================================================

// scroolイベント詳細(共通)
let selectbtn_h = $(".bottom_box").outerHeight();
let gnav_h = $(".header_wrap_box").outerHeight();

// scroolイベント詳細(gnav_appearance)
$(window).on("scroll resize", function () {
  var main_h = $(".mainvisual_wrap").outerHeight();
  console.log(main_h);
  var footer_h = $("#footer_wrap").offset().top;
  var scr = $(this).scrollTop();
  if (scr > footer_h - gnav_h / 2) {
    $(".header_nav_list").hide();
  } else if (scr > main_h - gnav_h / 2) {
    $(".header_nav_list").css("display", "flex");
    $(".header_nav_list").css({ color: "#542912" });
  } else {
    $(".header_nav_list").css({ color: "#fff" });
  }
});

// scroolイベント詳細(selectbtn_appearance)
$(window).on("scroll resize", function () {
  var height = $(window).height();
  var footer_h = $("#footer_wrap").offset().top;
  var scr = $(this).scrollTop();
  if (scr > footer_h - height) {
    $(".bottom_box").css("opacity", 0);
  } else if (scr > selectbtn_h) {
    $(".bottom_box").css("opacity", 1);
  } else {
    $(".bottom_box").css("opacity", 0);
  }
});
