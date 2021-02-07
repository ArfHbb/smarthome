<?php
require 'konek.php';
session_start();

if ( isset($_SESSION['id']) || isset($_SESSION['nama']) || isset($_SESSION['status']) || isset($_SESSION['pwd'])|| isset($_SESSION['uid'])) {
	$nama = $_SESSION['nama'];
	$status = $_SESSION['status'];
	$pwd = $_SESSION['pwd'];
	$uid = $_SESSION['uid'];
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
	<title>Welcome to secure home</title>
	<link href="material.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<link href="bootstrap-switch.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	
<style>
table{background:#fff!important;max-width:600px;width:100%;}
td label {margin-left:10px;}
</style>
</head>

<body>  
         
		 <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Profil Pengguna</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
    </div>
  </header>

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
	<form action="password_form.php">
	
    <nav class="mdl-navigation">
      
      <div class="menu-kiri-bagian-bawah">
        <div class="menu-kiri-list-bawah menu-kiri-link-bawah">&copy; 2017 Mantab Joss
		
		</div>
      </div>
    </nav>
  </div>
  
 
  
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--6-col">
		<div class="modal-dialog">
        
                        
        <div class="modal-content col-md-10">
          <table class="table">
  <tr>
    <td align="center"><b><label>ID Pengguna</label></b></td>
    <!-- creating button for the relay -->
	
	<td align="center"><?php  echo $_SESSION['id']; ?></td>
	

	</tr>
    <tr>
    <td align="center"><b><label>Nama</label></b></td>
    <!-- creating button for the relay -->
	
	<td align="center"><?php echo $nama ?></td>
	
	</tr>
	
	<tr>
    <td align="center"><b><label>Username</label></b></td>
    <!-- creating button for the relay -->
	
	<td align="center"><?php echo $uid ?></td>
	
	</tr>
	
	
	<tr>
    <td align="center"><b><label>Status</label></b></td>
    <!-- creating button for the relay -->
	
	<td align="center"><?php echo $status ?></td>
	
	</tr>
	
	<tr>
	<td align="center"><b><label>Password</label></b></td>
    <!-- creating button for the relay -->
	
	<td align="center"><?php echo $pwd ?></td>
	
	</tr>
	
	
	
</table><center>
<input type="submit" id="btn-pwd" name="submit" value="ubah password" class="btn btn-primary"> 
</form> </center>
<!-- feedback paragraphs -->

</div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>
</div>


</body>
</html>

