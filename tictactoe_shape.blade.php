<div class="main_componant w-100 bg-info d-flex justify-content-center align-items-center" style="height: 70%;">
  <div class="p-2 rounded" style="background-color: #f8f9fa; width: 300px; height: 300px;" id="tictacteo_contaner">
    <?php for ($row = 1; $row <= 3; $row++): ?>
      <div class="d-flex w-100" style="height: calc(100% / 3);">
        <?php for ($col = 1; $col <= 3; $col++): ?>
          <div
            class="box btn tretched-link fs-4 m-1 d-flex justify-content-center align-items-center"
            id="box<?= $row . $col ?>"
            style="color: #333; flex: 1; background-color: #fff; border: 2px solid #000; font-weight: bold; font-size: 2rem; transition: background-color 0.2s;">
          </div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </div>
</div>