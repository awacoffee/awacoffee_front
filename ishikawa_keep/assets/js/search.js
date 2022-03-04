const map_total_number = 4,
  main_map = document.getElementById("main_map"),
  click_map = document.getElementById("click_map"),
  reset_btn = document.getElementById("reset_btn");
main_map.setAttribute("src", "assets/img/map_1.svg");

for (let i = 0; i < map_total_number; i++) {
  const click_map = document.getElementById("map_" + (i + 1));

  click_map.addEventListener("click", () => {
    main_map.setAttribute("src", `assets/img/map_${i + 1}.svg`);
  });

  console.log(click_map);
}

reset_btn.addEventListener("click", function () {
  main_map.setAttribute("src", `assets/img/map_1.svg`);
});
