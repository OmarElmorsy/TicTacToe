<div class="main_componant w-100 bg-info d-flex justify-content-center align-items-center" style="height: 70%;">

  <div class=" w-50 h-50 p-1 m-0 " id="tictacteo_contaner">
    <?php for ($row = 1; $row <=3 ; $row++): ?>
      <div class="row w-100 border border-2 m-1" style="height:calc(190px/3); ">
        <?php $column = 3* $row - 2;?>
        <?php for ($col = $column ; $col < $column + 3; $col++): ?>
          <div class=" btn tretched-link col bg-dark m-1 fs-4" style="color: red;" id="box<?=$col?>"></div>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>

  </div>
</div>






<!-- ✅ 1. Classic Minimal Theme
Background: #f8f9fa (light gray)

Grid Border: #343a40 (dark gray / black)

X Color: #007bff (blue)

O Color: #dc3545 (red)

Clean and simple — easy to read and nice contrast.

✅ 2. Neon Retro Theme
Background: #1a1a2e (dark navy)

Grid Border: #0f3460 (neon blue)

X Color: #e94560 (neon pink)

O Color: #ffd369 (neon yellow)

Great for a glowing, game-y vibe.

✅ 3. Nature-Inspired Theme
Background: #eaf6f6 (minty pale green)

Grid Border: #2c786c (forest green)

X Color: #004445 (deep green)

O Color: #f8b400 (sunflower yellow)

Calming and modern, great for mobile or soft interfaces.

✅ 4. Bold & Modern Theme
Background: #ffffff (white)

Grid Border: #333333 (black)

X Color: #ff5733 (orange-red)

O Color: #33c1ff (light blue)

Strong contrast, clean and crisp on both light and dark displays. -->