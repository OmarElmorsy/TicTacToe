<?php
// echo json_encode(['icon' => '5', 'aftar'=> 4]);
header('Content-Type: application/json');

// echo json_encode([5,6,4]);
session_start();
ob_start(); // Start output buffering


if (!isset($_SESSION['x_postions'])) {
  $_SESSION['x_postions'] = [];
  $_SESSION['o_postions'] = [];
  array_push($_SESSION['x_postions'], $_POST['postion_id']);
  // echo json_encode(['icon' => 'x']);
} else {
  if (count($_SESSION['x_postions']) + count($_SESSION['o_postions']) != 9) {
    if (count($_SESSION['x_postions']) > count($_SESSION['o_postions'])) {
      array_push($_SESSION['o_postions'],  $_POST['postion_id']);
      // echo json_encode(['icon' => 'o']);
    } else {
      array_push($_SESSION['x_postions'],  $_POST['postion_id']);

      // echo json_encode(['icon' => 'x']);
    }
  }
}

// session_unset();
echo json_encode($_SESSION);





// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clicked'])) {

// } else {
//   print_r($_POST);
//   echo "Invalid request.";
// }
