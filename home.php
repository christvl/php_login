<?php
  session_start();
  if(!isset($_SESSION['username'])){
	  header("Location: login.php?mustlogin=0");
	  exit;
  }
  
  echo "Welcome " . ucfirst($_SESSION['username']);

?>
<br />
<a href="logout.php">Log out</a>