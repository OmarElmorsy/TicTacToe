$("#tictacteo_contaner").on("click", (e) => {
  if ($(e.target).hasClass("col")) {
    box_id = e.target.id;
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
      })
      .catch((error) => {
        console.error("Fetch error:", error);
      });
  }
});
