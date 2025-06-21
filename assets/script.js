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
        // console.log(data.icon);
        $(box).html(data.icon);
        if (data.game_status["is_won"]) {
          Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
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



function reset_game(){
  $('.col').html('')
} 