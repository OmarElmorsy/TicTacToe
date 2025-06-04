icons_style = {
  x: {
    color: "#ff0000",
  },
  o: {
    color: "#0000ff",
  },
};

$("#tictacteo_contaner").on("click", (e) => {
  box = e.target;
  if ($(box).hasClass("col") && $(box).html() == "") {
    box_id = box.id;

    fetch("action.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `clicked=true&postion_id=${box_id.substring(3)}`,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        $(box).html(data.icon);
      })
      .catch((error) => {
        console.error("Fetch error:", error);
      });
  }
});
