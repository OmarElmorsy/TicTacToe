<?php
$array_won = [6, 12, 15, 18, 24];
$is_won = false;
session_start();
// sessiom
$current_player = (int)$_POST['postion_id'];

if (!isset($_SESSION['x_postions'])) {
  $_SESSION['x_postions'] = [];
  $_SESSION['o_postions'] = [];
  $_SESSION['count_postions'] = 1;
  array_push($_SESSION['x_postions'], $current_player);
  echo json_encode(['icon' => 'x']);
  // exit;
} else {
  if ($_SESSION['count_postions'] != 9) {
    if (count($_SESSION['x_postions']) > count($_SESSION['o_postions'])) {
      $_SESSION['count_postions']++;
      array_push($_SESSION['o_postions'], $current_player);
      if (count($_SESSION['o_postions']) >= 3) $is_won = is_won($_SESSION['o_postions'], $array_won);
      echo json_encode(['icon' => 'o', $is_won, $_SESSION['o_postions']]);
      // exit;
    } else {
      $_SESSION['count_postions']++;
      array_push($_SESSION['x_postions'], $current_player);
      if (count($_SESSION['x_postions']) >= 3) $is_won = is_won($_SESSION['x_postions'], $array_won);
      echo json_encode(['icon' => 'x', $is_won, $_SESSION['x_postions']]);
      // exit;
    }
  }
}




/* 
                                                solution for won 
                                                  6 12 15 18 24
1 =>
  123 = 1 or = 6
  147 = 3 or = 12
  159 = 4 or = 15                                 [11, 13, 22, 32, 33]
2=>                                               [1, 3, 5, 8, 9]
  123 = 1 or = 6
  258 = 3 or = 15                                   [1, 5, 9]
3=>
  123 = 1 or = 6
  369 = 3 or = 18
  357 = 2 or = 15
4=>
  147 = 3 or =12 
  456 = 1 or = 15
5=>
  258 = 3 or = 15
  456 = 1 or = 15
6=>
  369 = 3 or = 18
  456 = 1 or = 15
7=>
  147 = 3 or = 12
  357 = 2 or = 15
  789 = 1 or = 24
8=>
  258 = 3 or = 15
  789 = 1 or = 24
9=>
  159 = 4 or = 15
  369 = 3 or = 18
  789 = 1 or = 24



*/




// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clicked'])) {

// } else {
//   print_r($_POST);
//   echo "Invalid request.";
// }

function  is_won($postions, $array_won)
{
  $sum = 0;
  $length = count($postions);
  for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
      for ($k = $j + 1; $k < $length; $k++) {
        $sum = $postions[$i] + $postions[$j] + $postions[$k];
        if (in_array($sum, $array_won)) {
          return true;
        }
      }
    }
  }

  return false;
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
