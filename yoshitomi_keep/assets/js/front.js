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
// $(window).on("load", function () {
//     $(".tab_wrap li:first-of-type").addClass("active");
//     $(".area:first-of-type").addClass("is_active");
//     let hashName = location.hash;
//     GethashID(hashName);
// });

// scroolイベント
$(function () {
  let main_h = $(".mainvisual_wrap").outerHeight();
  $(window).scroll(function () {
    var scr = $(this).scrollTop();
    if (scr > main_h) {
      $(".header_nav_list").css({ color: "#542912" });
    } else {
      $(".header_nav_list").css({ color: "#fff" });
    }
  });
});

$(function () {
  let bottom_h = $(".bottom_box").outerHeight();
  let height = $(window).height();
  let footer_h = $("#footer_wrap").offset().top;
  $(window).scroll(function () {
    var scr = $(this).scrollTop();
    if (scr > footer_h - height) {
      $(".bottom_box").css("opacity", 0);
    } else if (scr > bottom_h) {
      $(".bottom_box").css("opacity", 1);
    } else {
      $(".bottom_box").css("opacity", 0);
    }
  });
});
