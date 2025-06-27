<!-- <div class="main_componant w-100 bg-info d-flex justify-content-center align-items-center" style="height: 70%;">
  <div class="p-2 rounded style="background-color: #f8f9fa; width: 300px; height: 300px;" id="tictacteo_contaner">
    <?php for ($row = 1; $row <= 3; $row++): ?>
      <div class="d-flex w-100" style="height: calc(100% / 3);">
        <?php for ($col = 1; $col <= 3; $col++): ?>
          <div
            class="box btn tretched-link fs-4 m-1 d-flex justify-content-center align-items-center"
            id="box<?= $row . $col ?>"
            style="color: white; flex: 1; background-color: black; border: 2px solid #000; font-weight: bold; font-size: 2rem; transition: background-color 0.2s;">
          </div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </div>
</div> -->


<!-- <div class="main_componant w-100 bg-info d-flex justify-content-center align-items-center" style="height: 70%;">
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
</div> -->

@include('tictactoe_shape.blade.php', [
'view_mode'=>false,
])

<!-- <div class="main_componant w-100 bg-dark d-flex justify-content-center align-items-center" style="height: 70%;">
  <div class="p-2 rounded style="background-color: #000; width: 300px; height: 300px;" id="tictacteo_contaner">
    <?php for ($row = 1; $row <= 3; $row++): ?>
      <div class="d-flex w-100" style="height: calc(100% / 3);">
        <?php for ($col = 1; $col <= 3; $col++): ?>
          <div 
            class="box btn tretched-link fs-4 m-1 d-flex justify-content-center align-items-center" 
            id="box<?= $row . $col ?>" 
            style="flex: 1; background-color: #000; color: #0f0; font-weight: bold; font-size: 2rem; border: 2px solid #0f0; text-shadow: 0 0 5px #0f0;">
          </div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </div>
</div> -->

<!-- <div class="main_componant w-100 d-flex justify-content-center align-items-center" style="height: 70%; background: linear-gradient(#74ebd5, #ACB6E5);">
  <div class="p-2 rounded style="backdrop-filter: blur(10px); background-color: rgba(255, 255, 255, 0.2); border-radius: 12px; width: 300px; height: 300px;" id="tictacteo_contaner">
    <?php for ($row = 1; $row <= 3; $row++): ?>
      <div class="d-flex w-100" style="height: calc(100% / 3);">
        <?php for ($col = 1; $col <= 3; $col++): ?>
          <div 
            class="box btn tretched-link fs-4 m-1 d-flex justify-content-center align-items-center" 
            id="box<?= $row . $col ?>" 
            style="flex: 1; background-color: rgba(255, 255, 255, 0.15); border: 2px solid rgba(255, 255, 255, 0.3); color: white; font-weight: bold; font-size: 2rem;">
          </div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </div>
</div> -->


<!-- <div class="main_componant w-100 d-flex justify-content-center align-items-center" style="height: 70%; background-color: #f0f0f0;">
  <div class="p-2 rounded style="width: 300px; height: 300px; background-color: #ffffff;" id="tictacteo_contaner">
    <?php for ($row = 1; $row <= 3; $row++): ?>
      <div class="d-flex w-100" style="height: calc(100% / 3);">
        <?php for ($col = 1; $col <= 3; $col++): ?>
          <div 
            class="box btn tretched-link fs-4 m-1 d-flex justify-content-center align-items-center" 
            id="box<?= $row . $col ?>" 
            style="flex: 1; background-color: #3498db; color: white; font-size: 2rem; font-weight: bold; border-radius: 8px; transition: background-color 0.2s;">
          </div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </div>
</div> -->