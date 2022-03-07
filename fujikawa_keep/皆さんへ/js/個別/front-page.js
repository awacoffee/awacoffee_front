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
