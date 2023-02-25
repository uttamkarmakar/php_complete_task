<?php

  /* Check if logged in, if not then redirect to loginPage.
  *  If q is set then go to the desired page using the query.
  */
  session_start();
  if(!isset($_SESSION['logged'])){
    header('location: login.php');
  }
  if (isset($_GET['q'])) {
    $page = $_GET['q'];
  } else {
    $page = 4;
  }
  $page_filename = "assignment{$page}/index.php";
  if (file_exists($page_filename)) {
    session_abort();
    include($page_filename); 
  } else {
    echo "Page not found.";
  }
?>
