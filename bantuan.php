<?php
require 'konek.php';
session_start();
if ( isset($_SESSION['id']) || isset($_SESSION['nama']) || isset($_SESSION['status']) ) {
	$nama = $_SESSION['nama'];
	$status = $_SESSION['status'];
	

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
      <span class="mdl-layout-title">Bantuan</span>
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
	
	
    <nav class="mdl-navigation">
      
      <div class="menu-kiri-bagian-bawah">
        <div class="menu-kiri-list-bawah menu-kiri-link-bawah">&copy; 2018 Smart Home
		
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
          <table >
  <tr> 
    <td > <h1><font color="black"><label><div class="modal-header">
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Aplikasi Smart Home Berbasis Android</h4>
        </div></h1><br/>
	Aplikasi ini dapat digunakan untuk menghidupkan dan mematikan lampu melalui jarak jauh.
	Untuk dapat menggunakan fasiitas tersebut, silakan login.
	Anda juga dapat menambahkan akun lain dalam satu rumah<br/>
	Untuk melakukan instalasi smart home baru, silakan hubungi kami di smarthome@gmail.com




	</label>
	</font>
	</td>
    <!-- creating button for the relay -->
	
	

</table>

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

