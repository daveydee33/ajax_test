<?php

  $method = $_SERVER['REQUEST_METHOD'];
  $user_text = $_REQUEST['user_text']; // Use $_REQUEST if we don't know if it's $_POST or $_GET
  $response = strtoupper($user_text);

// Can comment out this whole switch statement now, only keep to prepend the response to see if it came by POST or GET
  switch ($method) {
    case 'GET':
      //$user_text = $_GET['user_text'];  // replaced by $_REQUEST above
      $response = "GET: " . $response;
      break;
    case 'POST':
      //$user_text = $_POST['user_text'];  // replaced by $_REQUEST above
      $response = "POST: " . $response;
      break;
    default:
      $response = "There was an error...";
      break;
  }

  echo $response;

?>
