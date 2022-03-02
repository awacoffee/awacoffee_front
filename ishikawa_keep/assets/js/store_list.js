"use strict";

// ▼moreボタンでさらに表示▼

// 例えば徳島市ブロックの中にあるmoreボタンは徳島市ブロックだけに反応してほしい
// 押されたボタンの兄弟要素を取得してfind →出ない。

// var show = 3; //初期表示件数
// var num = 3; //追加していく件数（仮）
// var contents = ".store_lists article";
// $(contents + ":nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
// $(".more_btn").on("click", function () {
//     $(this)
//         .siblings(".store_lists") // btnの兄弟要素全て取得
//         .find(contents + ".is-hidden")
//         .slice(0, num)
//         .removeClass("is-hidden"); // num個切り出して表示
//     if (
//         $(this)
//             .siblings(".store_lists")
//             .find(contents + ".is-hidden").length == 0
//     ) {
//         $(this).fadeOut(); // is-hiddenついているものがなくなったらbtn消える
//     }
// });

// ▼moreボタンでさらに表示▼
// 出るには出てる（出てくる枚数がおかしい気はする）
// moreボタン押した時の判定がエリアの垣根を超えてしまう

// var show = 3; //初期表示件数
// var num = 3; //追加していく件数（仮）
// var contents = ".store_lists article";
// $(contents + ":nth-child(n + " + (show + 1) + ")").addClass("is-hidden");
// $(".more_btn").on("click", function () {
//     $(contents + ".is-hidden")
//         .slice(0, num)
//         .removeClass("is-hidden");
//     if ($(contents + ".is-hidden").length == 0) {
//         $(".more_btn").fadeOut(); // is-hiddenついているものがなくなったらbtn消える
//     }
// });

// =========pcのカードのmoreボタン================================================

function pcMoreBtn() {
    const show = 3; //初期表示枚数
    const moreNum = 3; //追加カード枚数
    $(".stores_card:nth-child(n + " + (show + 1) + ")").addClass("is-hidden"); //初期表示枚数以降のカードにis-hiddenをつける
    $(".more_btn").on("click", function () {
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
