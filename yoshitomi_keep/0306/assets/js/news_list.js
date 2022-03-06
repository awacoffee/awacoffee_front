"use strict";

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
