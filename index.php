<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tic Tac Toe</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="vh-100">
  <!-- <div class="p-3 mb-2 bg-primary text-white">hallo on Tic Tac Toe game </div> -->

  <div class="card w-100 h-50 bg-primary">
    <div class="card-body">
      <div id="tic_tac_toe_contaner_id">
        <?php for ($i = 0; $i < 3; $i++): ?>
          <div id="row<?= $i ?>" ">
            <?php for ($y = 0; $y < 3; $y++): ?>
              <div id=" box<?= $i . $y ?>" class="border border-2">
              </div>
            <?php endfor; ?>
          </div>
        <?php endfor; ?>
    </div>
  </div>
  </div>


</body>

</html>