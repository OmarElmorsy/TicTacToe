<?php
session_start();
// session_unset();

$current_player = (int)$_POST['postion_id'];

if (!isset($_SESSION['x_postions'])) {
  $_SESSION['x_postions'] = [];
  $_SESSION['o_postions'] = [];
  $_SESSION['count_postions'] = 1;
  $_SESSION['game_ended'] = ['won_player' => 0, 'game_ended' => false];

  add_postons_in_session($current_player, 'x_postions');
  echo json_encode(['icon' => 'x', 'game_status' => $_SESSION['game_ended']]);
  exit;
} else {
  if ($_SESSION['count_postions'] != 9) {
    if (count($_SESSION['x_postions']) > count($_SESSION['o_postions'])) {
      $_SESSION['count_postions']++;
      add_postons_in_session($current_player, 'o_postions');

      if (count($_SESSION['o_postions']) >= 3)  is_won($_SESSION['o_postions'], 'o', $_SESSION['count_postions']);
      echo json_encode(['icon' => 'o', 'game_status' => $_SESSION['game_ended'], $_SESSION['o_postions']]);
      exit;
    } else {
      $_SESSION['count_postions']++;
      add_postons_in_session($current_player, 'x_postions');

      if (count($_SESSION['x_postions']) >= 3)  is_won($_SESSION['x_postions'], 'x', $_SESSION['count_postions']);
      echo json_encode(['icon' => 'x', 'game_status' => $_SESSION['game_ended'], $_SESSION['x_postions']]);
      exit;
    }
  }
}



function add_postons_in_session($current_player, $postion_type)
{
  array_push($_SESSION[$postion_type], ['row' => (int)($current_player / 10), 'col' => $current_player % 10]);
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

function  is_won($postions, $player, $boreder_count)
{
  $is_won = false;
  $length = count($postions);
  for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
      for ($k = $j + 1; $k < $length; $k++) {

        if ($postions[$i]['row'] == $postions[$j]['row'] && $postions[$j]['row'] == $postions[$k]['row']) {
          $is_won = true;

          break;
        }

        if ($postions[$i]['col'] == $postions[$j]['col'] && $postions[$j]['col'] == $postions[$k]['col']) {
          $is_won = true;

          break;
        }

        if (($postions[$i]['row'] == $postions[$i]['col']) && ($postions[$j]['row'] == $postions[$j]['col']) && ($postions[$k]['row'] == $postions[$k]['col'])) {
          $is_won = true;

          break;
        }

        if (($postions[$i]['row'] + $postions[$i]['col'] == 4) && ($postions[$j]['row'] + $postions[$j]['col'] == 4) && ($postions[$k]['row'] + $postions[$k]['col'] == 4)) {
          $is_won = true;

          break;
        }
      }
    }
  }

  $_SESSION['game_ended']['won_player'] = $is_won ? $player : 0;
  $_SESSION['game_ended']['game_ended'] = ($boreder_count == 9) ? true : $is_won;
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
