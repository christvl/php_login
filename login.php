<?php
  session_start(); 
  $msg="";

  //login try
  if(isset($_POST['doLogin'])){
    
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	    
	  if($username == "admin" && $password == "123swe") {
	  	$_SESSION['username'] = $username;
	  	header("Location: home.php");
	  	exit;
	  } else {
	  	$msg = "Wrong username or password, Please try again.";
	  }
  }

  //Error message
  if(isset($_GET['mustlogin'])){
    $msg="Warning this a protected site so pls login with the right credentials";
  }

  //logout message
  if(isset($_GET['logout'])) {
    $msg="you logged out.";
  }
?>


	<form action="" method="POST" >
	  <fieldset>
        <legend>Log in please</legend>
		    <?php echo $msg;?>
        <p>
          <label >Username:</label><br>
          <input class="text" type="text" name="username">
        </p>
        <p>
          <label>Password:</label><br>
          <input class="text" type="password" name="password">
        </p>
        <p>
          <input type="submit" name="doLogin" value="Login">
        </p>
      </fieldset>
	</form>
