// ▼店舗情報セクション／タブ切り替え▼
function GethashID(hashIDName) {
    if (hashIDName) {
        $(".column_tab_wrap li h2")
            .find("a")
            .each(function () {
                let idName = $(this).attr("href");
                if (idName == hashIDName) {
                    let parentElm = $(this).parent();
                    $(".column_tab_wrap li h2").removeClass("column_active");
                    $(parentElm).addClass("column_active");
                    $(".cards_wrap").removeClass("is_column_active");
                    $(hashIDName).addClass("is_column_active");
                }
            });
    }
}

$(".column_item").on("click", function () {
    let idName = $(this).attr("href");
    GethashID(idName);
    return false;
});
