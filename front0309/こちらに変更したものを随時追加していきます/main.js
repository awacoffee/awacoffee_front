"use-strict";
// フロントページ
// 店舗一覧ページ
// 店舗個別ページ
// 条件検索ページ
// ニュース一覧ページ

// ------------------------------------------------------------------------
// フロントページ
// ------------------------------------------------------------------------

// ===loading画面==========================================================
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

// ===ハンバーガーメニュー 表示切り替え=====================================
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

// ===店舗情報セクション／タブ切り替え=====================================
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
  $(window).on("load scroll", function () {
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
  let before_scr = 0;
  var header_h = $(".header_inner_bg").outerHeight();
  var mainv_h = $(".mainvisual_wrap").outerHeight();
  var footer_h = $("#footer_wrap").offset().top;
  $(window).on("load scroll", function () {
    var scr = $(this).scrollTop();
    if (scr > footer_h - header_h / 2) {
      $(".header_inner_bg").addClass("none");
    } else if (scr > mainv_h) {
      $(".header_inner_bg").removeClass("none");
      $(".header_inner_bg").addClass("bgc_white");
      $(".header_nav_list").addClass("cha_col");
      if (scr < before_scr) {
        $(".header_inner_bg").removeClass("up");
        $(".header_inner_bg").addClass("down");
      } else {
        $(".header_inner_bg").removeClass("down");
        $(".header_inner_bg").addClass("up");
      }
    } else {
      $(".header_inner_bg").removeClass("bgc_white");
      $(".header_nav_list").removeClass("cha_col");
    }
    before_scr = $(this).scrollTop();
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

//  ===topbutton=========================================================
$(function () {
  var mainv_h = $(".mainvisual_wrap").outerHeight();
  $(window).on("load scroll", function () {
    var scr = $(this).scrollTop();
    if (scr > mainv_h) {
      $(".js-scroll").removeClass("visible");
      $(".js-pagetop").addClass("visible");
    } else {
      $(".js-pagetop").removeClass("visible");
      $(".js-scroll").addClass("visible");
    }
  });

  $("#top_to_button").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 800, "swing");
    return false;
  });
});

// ------------------------------------------------------------------------
// 店舗一覧ページ（moreボタンで表示カード追加）                             ★★差し替えが必要
// ------------------------------------------------------------------------

// =========pcのカードのmoreボタン================================================

function pcMoreBtn() {
  const show = 3; //初期表示枚数
  const moreNum = 3; //追加カード枚数
  let cityLength = $(".city_area .pc_stores_cards .stores_card").length;
  let eastLength = $(".east_area .pc_stores_cards .stores_card").length;
  let westLength = $(".west_area .pc_stores_cards .stores_card").length;
  let southLength = $(".south_area .pc_stores_cards .stores_card").length;

  // 徳島市の店舗カードmoreボタン
  if (cityLength <= show) {
    $(".city_area .more_btn").fadeOut();
  } else {
    $(
      ".city_area .pc_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".city_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }

  // 東部の店舗カードmoreボタン
  if (eastLength <= show) {
    $(".east_area .more_btn").fadeOut();
  } else {
    $(
      ".east_area .pc_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".east_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }
  // 西部の店舗カードmoreボタン
  if (westLength <= show) {
    $(".west_area .more_btn").fadeOut();
  } else {
    $(
      ".west_area .pc_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".west_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }
  // 南部の店舗カードmoreボタン
  if (southLength <= show) {
    $(".south_area .more_btn").fadeOut();
  } else {
    $(
      ".south_area .pc_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".south_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }
}

// =========spのカードのmoreボタン================================================

function spMoreBtn() {
  const show = 4; //初期表示枚数
  const moreNum = 4; //追加カード枚数
  let cityLength = $(".city_area .sp_stores_cards .stores_card").length;
  let eastLength = $(".east_area .sp_stores_cards .stores_card").length;
  let westLength = $(".west_area .sp_stores_cards .stores_card").length;
  let southLength = $(".south_area .sp_stores_cards .stores_card").length;

  // 徳島市の店舗カードmoreボタン
  if (cityLength <= show) {
    $(".city_area .more_btn").fadeOut();
  } else {
    $(
      ".city_area .sp_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".city_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }

  // 東部の店舗カードmoreボタン
  if (eastLength <= show) {
    $(".east_area .more_btn").fadeOut();
  } else {
    $(
      ".east_area .sp_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".east_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }
  // 西部の店舗カードmoreボタン
  if (westLength <= show) {
    $(".west_area .more_btn").fadeOut();
  } else {
    $(
      ".west_area .sp_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".west_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }

  // 南部の店舗カードmoreボタン
  if (southLength <= show) {
    $(".south_area .more_btn").fadeOut();
  } else {
    $(
      ".south_area .sp_stores_cards .stores_card:nth-child(n + " +
        (show + 1) +
        ")"
    ).addClass("is-hidden");
    $(".south_area .more_btn").on("click", function () {
      $(this)
        .prev(".store_lists")
        .find(".stores_card.is-hidden")
        .slice(0, moreNum)
        .removeClass("is-hidden");
      if (
        $(this).prev(".store_lists").find(".stores_card.is-hidden").length == 0
      ) {
        $(this).fadeOut();
      }
    });
  }
}
pcMoreBtn();
spMoreBtn();

// ------------------------------------------------------------------------
// 店舗個別ページ
// ------------------------------------------------------------------------

//  ===画像切り替え=========================================================
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

//  ===ブックマークのチェック=========================================================
// $(function () {
//   $(".store_mark").on("click", function () {
//     $(this).toggleClass("checked");
//   });
// });

// ------------------------------------------------------------------------
// 条件検索ページ
// ------------------------------------------------------------------------
const map_total_number = 4,
  main_map = document.getElementById("main_map"),
  click_map = document.getElementById("click_map"),
  reset_btn = document.getElementById("reset_btn");
main_map.setAttribute("src", path + "/assets/img/map_1.svg");

for (let i = 0; i < map_total_number; i++) {
  const click_map = document.getElementById("map_" + (i + 1));

  click_map.addEventListener("click", () => {
    main_map.setAttribute("src", path + `/assets/img/map_${i + 1}.svg`);
  });
}

reset_btn.addEventListener("click", function () {
  main_map.setAttribute("src", path + `/assets/img/map_1.svg`);
});

// ------------------------------------------------------------------------
// ニュース一覧ページ
// ------------------------------------------------------------------------
// ▼moreボタンでさらに表示▼

var show = 4; //初期表示件数
var num = 4; //追加していく件数（仮）
var contents = ".news_wrap_cards li";
$(contents + ":nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
$(".more_btn").on("click", function () {
  $(contents + ".is-hidden")
    .slice(0, num)
    .removeClass("is-hidden");
  if ($(contents + ".is-hidden").length == 0) {
    $(".more_btn").fadeOut(); // is-hiddenついているものがなくなったらbtn消える
  }
});
