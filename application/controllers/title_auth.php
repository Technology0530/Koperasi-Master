<?php
  $page = (isset($_GET['page'])) ? $_GET['page'] : '';

  switch ($page) {
    case 'login':
      echo "Login";
      break;

    case 'register':
      echo "Register";
      break;

    default:
      echo "Login";
      break;
  }

?>
