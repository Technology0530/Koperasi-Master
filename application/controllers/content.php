<?php
  $pages  = (isset($_GET['pages'])) ? $_GET['pages'] : '';

  switch ($pages) {
    case 'dashboard':
      include 'application/views/dashboard.php';
      break;

    default:
      include 'application/views/dashboard.php';
      break;
  }
?>
