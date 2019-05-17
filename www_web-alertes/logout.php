<?php
  // Init session
  session_start();

  // Unset all session values
  $_SESSION = array();

  // Destroy session
  session_destroy();

  // Redirect to login
  header('location: index.php');
  exit;
  