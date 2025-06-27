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
  if ($(box).hasClass("box") && $(box).html().trim() == "") {
    box_id = box.id;

    fetch("action.blade.php", {
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
        if (data.game_status["game_ended"]) {
          title = "";
          text = "";
          if (data.game_status["won_player"] == 0) {
            title = "No Winner";
            text = "No player has won the game.";
          } else {
            title = "🎉 Player Wins!";
            text = `Congratulations! Player ${data.game_status["won_player"]} has won the game.`;
          }
          Swal.fire({
            title: title,
            text: text,
            showCancelButton: true,
            confirmButtonText: "Play agin",
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              reset_game();
            } else if (result.isDenied) {
              Swal.fire("Changes are not saved", "", "info");
            }
          });
        }
      })
      .catch((error) => {
        console.error("Fetch error:", error);
      });
  }
});

function reset_game() {
  $(".box").html("");

  fetch("reset_game.blade.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    });
}
