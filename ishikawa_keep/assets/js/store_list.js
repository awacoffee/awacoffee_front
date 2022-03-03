"use strict";

// =========pcのカードのmoreボタン================================================

function pcMoreBtn() {
    const show = 3; //初期表示枚数
    const moreNum = 3; //追加カード枚数
    let cityLength = $(".city_area .pc_stores_cards .stores_card").length
    let eastLength = $(".east_area .pc_stores_cards .stores_card").length
    let westLength = $(".west_area .pc_stores_cards .stores_card").length
    let southLength = $(".south_area .pc_stores_cards .stores_card").length

    // 徳島市の店舗カードmoreボタン
    if (cityLength <= show) {
        $(".city_area .more_btn").fadeOut();
    } else {
$(".city_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".city_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };

        // 東部の店舗カードmoreボタン
    if (eastLength <= show) {
        $(".east_area .more_btn").fadeOut();
    } else {
$(".east_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".east_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };
        // 西部の店舗カードmoreボタン
    if (westLength <= show) {
        $(".west_area .more_btn").fadeOut();
    } else {
$(".west_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".west_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };
        // 南部の店舗カードmoreボタン
    if (southLength <= show) {
        $(".south_area .more_btn").fadeOut();
    } else {
$(".south_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".south_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };
}

// =========spのカードのmoreボタン================================================

function spMoreBtn() {
    const show = 4; //初期表示枚数
    const moreNum = 4; //追加カード枚数
    let cityLength = $(".city_area .sp_stores_cards .stores_card").length
    let eastLength = $(".east_area .sp_stores_cards .stores_card").length
    let westLength = $(".west_area .sp_stores_cards .stores_card").length
    let southLength = $(".south_area .sp_stores_cards .stores_card").length

   // 徳島市の店舗カードmoreボタン
    if (cityLength <= show) {
        $(".city_area .more_btn").fadeOut();
    } else {
$(".city_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".city_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };

        // 東部の店舗カードmoreボタン
    if (eastLength <= show) {
        $(".east_area .more_btn").fadeOut();
    } else {
$(".east_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".east_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };
        // 西部の店舗カードmoreボタン
    if (westLength <= show) {
        $(".west_area .more_btn").fadeOut();
    } else {
$(".west_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".west_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };

        // 南部の店舗カードmoreボタン
    if (southLength <= show) {
        $(".south_area .more_btn").fadeOut();
    } else {
$(".south_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
    $(".south_area .more_btn").on("click", function () {
        $(this)
            .prev(".store_lists")
            .find(".stores_card.is-hidden")
            .slice(0, moreNum)
            .removeClass("is-hidden");
        if (
            $(this).prev(".store_lists").find(".stores_card.is-hidden")
                .length == 0
        ) {
            $(this).fadeOut();
        }
    });
    };

}

// ロード時のwindow幅に応じてmoreボタンの関数を分ける　これをリアルタイムに切り替わるようにしたい

// let windowSize = $(window).width();

// if (windowSize < 768) {
//     spMoreBtn();
// } else {
//     pcMoreBtn();
// }


$(window).on("load resize", function () {
 let window_w = window.innerWidth;
 if (window_w > 768) {
    pcMoreBtn();
 } else {
spMoreBtn();
 }
});




// // =========pcのカードのmoreボタン================================================

// function pcMoreBtn() {
//     const show = 3; //初期表示枚数
//     const moreNum = 3; //追加カード枚数

//     function hiddenCut() {
//         $(this)
//             .prev(".store_lists")
//             .find(".stores_card.is-hidden")
//             .slice(0, moreNum)
//             .removeClass("is-hidden");
//         if (
//             $(this).prev(".store_lists").find(".stores_card.is-hidden")
//                 .length == 0
//         ) {
//             $(this).fadeOut();
//         }
//     };

//     // 徳島市の店舗カードmoreボタン
//     if (cityLength <= show) {
//         $(".city_area .more_btn").fadeOut();
//     } else {
// $(".city_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//         $(".city_area .more_btn").on("click",hiddenCut);
//     };

//     // 東部の店舗カードmoreボタン
//     if (eastLength <= show) {
//         $(".east_area .more_btn").fadeOut();
//     } else {
// $(".east_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//         $(".east_area .more_btn").on("click",hiddenCut);
//     };

//     // 西部の店舗カードmoreボタン
//     if (westLength <= show) {
//         $(".west_area .more_btn").fadeOut();
//     } else {
// $(".west_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//     $(".west_area .more_btn").on("click",hiddenCut);
//     };

//     // 南部の店舗カードmoreボタン
//     if (southLength <= show) {
//         $(".south_area .more_btn").fadeOut();
//     } else {
// $(".south_area .pc_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//         $(".south_area .more_btn").on("click",hiddenCut);
//     };
// }

// // =========spのカードのmoreボタン================================================

// function spMoreBtn() {
//     const show = 4; //初期表示枚数
//     const moreNum = 4; //追加カード枚数

//     function hiddenCut() {
//         $(this)
//             .prev(".store_lists")
//             .find(".stores_card.is-hidden")
//             .slice(0, moreNum)
//             .removeClass("is-hidden");
//         if (
//             $(this).prev(".store_lists").find(".stores_card.is-hidden")
//                 .length == 0
//         ) {
//             $(this).fadeOut();
//         }
//     }

//    // 徳島市の店舗カードmoreボタン
//     if (cityLength <= show) {
//         $(".city_area .more_btn").fadeOut();
//     } else {
// $(".city_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//     $(".city_area .more_btn").on("click",hiddenCut);
//     };

//     // 東部の店舗カードmoreボタン
//     if (eastLength <= show) {
//         $(".east_area .more_btn").fadeOut();
//     } else {
// $(".east_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//     $(".east_area .more_btn").on("click",hiddenCut);
//     };

//     // 西部の店舗カードmoreボタン
//     if (westLength <= show) {
//         $(".west_area .more_btn").fadeOut();
//     } else {
// $(".west_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//     $(".west_area .more_btn").on("click",hiddenCut);
//     };

//     // 南部の店舗カードmoreボタン
//     if (southLength <= show) {
//         $(".south_area .more_btn").fadeOut();
//     } else {
// $(".south_area .sp_stores_cards .stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
//     $(".south_area .more_btn").on("click",hiddenCut);
//     };
// }

// // =========変数の設定================================================
// let area1 = $(".city_area");
// let area2 = $(".east_area");
// let area3 = $(".west_area");
// let area4 = $(".south_area");

// let cityLength = $(".city_area .pc_stores_cards .stores_card").length;
// let eastLength = $(".east_area .pc_stores_cards .stores_card").length;
// let westLength = $(".west_area .pc_stores_cards .stores_card").length;
// let southLength = $(".south_area .pc_stores_cards .stores_card").length;

// // ========ロード時のwindow幅に応じてmoreボタンの関数を分ける========

// $(window).on("load resize", function () {
//  let window_w = window.innerWidth;
//  if (window_w > 768) {
//     pcMoreBtn();
//  } else {
// spMoreBtn();
//  }
// });
