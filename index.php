<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- <form action="login.php" method="POST">
	<input type="text" name="uid" placeholder="Username">
	<input type="password" name="pwd" placeholder="Password">
	<button type="submit">LOGIN</button>
</form>

<form action="signup.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="Lastname">
	<input type="text" name="uid" placeholder="Username">
	<input type="password" name="pwd" placeholder="Password">
	<button type="submit">SIGN UP</button>
</form>

<form action="logout.php">
	<button>LOGOUT</button>
</form> -->

<div class="ra">
  <main class="mdl-layout__content login">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col mdl-cell--3-offset-desktop">
        <h1>Masuk ke Smart Home</h1>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-card mdl-shadow--2dp">

            <form action="login.php" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input type="uid" autocomplete="off" name="uid" class="mdl-textfield__input" id="uid" />
                <label class="mdl-textfield__label" for="uid">username</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input type="password" autocomplete="off" name="pwd" class="mdl-textfield__input" id="katasandi" />
                <label class="mdl-textfield__label" for="katasandi">Password</label>
              </div>
              <div class="clearkan"></div><center>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="login" type="submit">
                Masuk
              
			 
            </form>
            <?php
            	if (isset($_SESSION['id'])) {
            		header("Location: profile.php");
            	} else {
            		//echo "Silahkan Login";
            	}
            ?>
        </div>

      </div>
    </div>
  </main>
</div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
