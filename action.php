<?php
// $is_won = false;
session_start();
// session_unset();

$current_player = (int)$_POST['postion_id'];

if (!isset($_SESSION['x_postions'])) {
  $_SESSION['x_postions'] = [];
  $_SESSION['o_postions'] = [];
  $_SESSION['count_postions'] = 1;
  $_SESSION['game_endd'] = ['won_player' => 0, 'is_won' => false];

  add_postons_in_session($current_player, 'x_postions');
  echo json_encode(['icon' => 'x', 'game_status' => $_SESSION['game_endd']]);
  exit;
} else {
  if ($_SESSION['count_postions'] != 9) {
    if (count($_SESSION['x_postions']) > count($_SESSION['o_postions'])) {
      $_SESSION['count_postions']++;
      add_postons_in_session($current_player, 'o_postions');

      if (count($_SESSION['o_postions']) >= 3)  is_won($_SESSION['o_postions'], 'o');
      echo json_encode(['icon' => 'o', 'game_status' => $_SESSION['game_endd'], $_SESSION['o_postions']]);
      exit;
    } else {
      $_SESSION['count_postions']++;
      add_postons_in_session($current_player, 'x_postions');

      if (count($_SESSION['x_postions']) >= 3)  is_won($_SESSION['x_postions'], 'x');
      echo json_encode(['icon' => 'x', 'game_status' => $_SESSION['game_endd'], $_SESSION['x_postions']]);
      exit;
    }
  }
}



function add_postons_in_session($current_player, $postion_type)
{
  array_push($_SESSION[$postion_type], ['row' => (int)($current_player / 10), 'col' => $current_player % 10, 'box' => $current_player]);
}

/* 
                                                solution for won 
[11, 22, 33]
[13, 22, 31]

[11, 12, 13]
[11, 21, 31]
[12, 22, 32]


[11, 12, 13]


*/


// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clicked'])) {

// } else {
//   print_r($_POST);
//   echo "Invalid request.";
// }

function  is_won($postions, $player)
{
  $is_won = false;
  $length = count($postions);
  for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
      for ($k = $j + 1; $k < $length; $k++) {
        if ((($postions[$i]['row'] == $postions[$j]['row']) == $postions[$k]['row']) || (($postions[$i]['col'] == $postions[$j]['col']) == $postions[$k]['col'])) {
          $is_won = true;
          break;
        }
        if (($postions[$i]['row'] == $postions[$i]['col']) && ($postions[$j]['row'] == $postions[$j]['col']) && ($postions[$k]['row'] == $postions[$k]['col'])) {
          $is_won = true;
          break;
        }
        if (($postions[$i]['box'] == 13 || $postions[$j]['box'] == 13 || $postions[$k]['box'] == 13) && ($postions[$i]['box'] == 22 || $postions[$j]['box'] == 22 || $postions[$k]['box'] == 22) && ($postions[$i]['box'] == 31 || $postions[$j]['box'] == 31 || $postions[$k]['box'] == 31)) {
          $is_won = true;
          break;
        }
      }
    }
  }
  $_SESSION['game_endd']['won_player'] = $player;
  $_SESSION['game_endd']['is_won'] = $is_won;

  // if($is_won) session_unset();
}




// function arranging_postions($old_postions, $new_postion)
// {
//   $potions_arranged = [];
//   $count = 0;
//   if (count($old_postions) == 0) return [$new_postion];

//   for ($i = 0; $i < count($old_postions); $i++) {
//     if ($new_postion > $old_postions[$i]) {
//       array_push($potions_arranged, $old_postions[$i]);
//       $count++;
//       continue;
//     }
//     break;
//   }
//   array_push($potions_arranged, $new_postion);

//   return  array_merge($potions_arranged, array_slice($old_postions, $count));
// }
