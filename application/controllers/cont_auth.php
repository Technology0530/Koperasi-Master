<?php
  $page = (isset($_GET['page'])) ? $_GET['page'] : '';

  switch ($page) {
    case 'login':
      include 'application/views/login.php';
      break;

    case 'register':
      include 'application/views/register.php';
      break;

    case 'login_error':
      include 'application/views/login.php';
      break;

    case 'register_success':
      include 'application/views/login.php';
      break;

    default:
      include 'application/views/login.php';
      break;
  }
?>
