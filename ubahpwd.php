<?php
require 'konek.php';
session_start();

if ( isset($_SESSION['id']) || isset($_SESSION['nama']) || isset($_SESSION['status']) || isset($_SESSION['pwd'])) {
	$nama = $_SESSION['nama'];
	$status = $_SESSION['status'];
	$pwd = $_SESSION['pwd'];
}
else {
    // Makes it easier to read
    $_SESSION['message'] = "Kamu harus login untuk melihat halaman ini!";
    header("location: index.php");  
}
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

<!-- <form action="ubah_pwd.php" method="POST">
	<input type="password" name="pwd_lama" placeholder="Username">
	<input type="password" name="pwd_baru" placeholder="Password">
	<button type="submit">LOGIN</button>
</form>

<form action="profile.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="Lastname">
	<input type="text" name="uid" placeholder="Username">
	<input type="password" name="pwd" placeholder="Password">
	<button type="submit">SIGN UP</button>
</form>

<form action="logout.php">
	<button>LOGOUT</button>
</form> -->


<div class="mdl-layout__drawer">
    	
	
	<a href="profile.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title"><br/><br/>Home </span>
    </a>
	
	
	<a href="profilku.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title">Profilku </span>
    </a>
	
	
	<?php if ($status=='admin'){
    echo '<a href="user.php" class="mdl-navigation__link beranda"><span class="mdl-layout-title">Pengguna </span></a>'; }
	?>
	
	<?php if ($status=='admin'){
    echo '<a href="log.php" class="mdl-navigation__link beranda"><span class="mdl-layout-title">Log Pengguna </span></a>'; }
	?>
		
	<a href="bantuan.php" class="mdl-navigation__link beranda">
    <span class="mdl-layout-title">Bantuan</span>
    </a>
	
	
	<center>
	<form action="logout.php">
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="login" type="submit">Keluar</button>
		</form>
	</center>
	
	
    <nav class="mdl-navigation">
      
      <div class="menu-kiri-bagian-bawah">
        <div class="menu-kiri-list-bawah menu-kiri-link-bawah">&copy; 2018 Smart Home
		
		</div>
      </div>
    </nav>
  </div>
  



<div class="ra">
  <main class="mdl-layout__content login">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col mdl-cell--3-offset-desktop">
        <h1>Ubah Password</h1>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-card mdl-shadow--2dp">

            <form action="ubah_pwd.php" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input type="password" autocomplete="off" name="pwd_lama" class="mdl-textfield__input" id="pwd_lama" />
                <label class="mdl-textfield__label" for="pwd_lama">Password Lama</label>
              </div>
			  
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input type="pwd_baru" autocomplete="off" name="pwd_baru" class="mdl-textfield__input" id="pwd_baru" />
                <label class="mdl-textfield__label" for="pwd_baru">Password Baru</label>
              </div>
              <div class="clearkan"></div><center>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="login" type="submit">
                Ubah </button></center>
			 
            </form>
            
        </div>

      </div>
    </div>
  </main>
</div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
