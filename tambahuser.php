<?php
session_start();
include 'konek.php';


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


$uid = $_SESSION['id'];
$pwd_lama = $_SESSION['pwd'];


 $db = new mysqli('localhost', 'root', '', 'raspberry');
 if(isset($_POST['submit'])):
   extract($_POST);
   if($isinama!="" && $isiuid!="" && $isipwd!="") ://mengecek diisi atau enggak
    $nama=$_POST['isinama'];
    $uid=$_POST['isiuid'];
    $pwd=$_POST['isipwd'];
	$status="pengguna";
   
         $db_check=$db->query("SELECT * FROM `users`");
         $count=mysqli_num_rows($db_check);
		 $idbaru=$count+1;
        
             $fetch=$db->query("insert into users values('$idbaru','$nama','$uid','$pwd','$status')");
             $isinama=''; $isiuid =''; $isipwd = '';
             $msg_sucess = "User baru telah ditambahkan.";
         
   else :
     $error = "Semua kolom harus diisi";
   endif;   
 endif;
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
      <span class="mdl-layout-title">Tambah User</span>
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
		 
        <div class="modal-dialog">
        
                        
        <div class="modal-content col-md-10">
        <div class="modal-header">
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Tambah user baru</h4>
        </div>
        <form method="post" autocomplete="off" id="password_form">
          <div class="modal-body with-padding">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Nama</label>
                <input type="" name="isinama" value="<?php echo @$isinama ?>" class="form-control">
              </div>
            </div>
          </div>                             
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Username</label>
                <input type=""  name="isiuid" value="<?php echo @$isiuid ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-sm-10">
              <label>Password</label>
              <input type="password"  name="isipwd" value="<?php echo @$isipwd ?>" class="form-control">
            </div>
          </div>
          </div>         
          </div>
           <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
             <?php echo @$error; ?><?php echo @$msg_sucess; ?>
            </div> 
          <!-- end Add popup  -->  
          <div class="modal-footer">
                     
            <input type="submit" id="btn-pwd" name="submit" value="Submit" class="btn btn-primary">            
          </div>
        </form> 

        </div>  
        </div> 
        
</body>
</html>
