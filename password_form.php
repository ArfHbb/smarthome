<?php
session_start();
include 'konek.php';


if ( isset($_SESSION['id']) || isset($_SESSION['nama']) || isset($_SESSION['status']) ) {
	$nama = $_SESSION['nama'];
	$status = $_SESSION['status'];
	

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
   if($old_password!="" && $password!="" && $confirm_pwd!="") :
    $user_id = $uid;
    $old_pwd=$_POST['old_password'];
    $pwd=$_POST['password'];
    $c_pwd=$_POST['confirm_pwd'];
    if($pwd == $c_pwd) :
       if($pwd!=$old_pwd) :
         $db_check=$db->query("SELECT * FROM `users` WHERE `id`='$user_id' AND `pwd` ='$old_pwd'");
         $count=mysqli_num_rows($db_check);
         if($count==1) :
             $fetch=$db->query("UPDATE `users` SET `pwd` = '$pwd' WHERE `id`='$user_id'");
             $old_password=''; $password =''; $confirm_pwd = '';
             $msg_sucess = "Password anda telah diganti.";
          else:
            $error = "Password yang dimasukkan salah";
          endif;
        else :
          $error = "Password lama dan password baru sama. Coba ganti yang lain";
        endif;
    else:
      $error = "Password dan konfirmasi password tidak cocok";
    endif;
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
      <span class="mdl-layout-title">Ubah Password</span>
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
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Ubah Password</h4>
        </div>
        <form method="post" autocomplete="off" id="password_form">
          <div class="modal-body with-padding">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Password Lama</label>
                <input type="password" name="old_password" value="<?php echo @$old_password ?>" class="form-control">
              </div>
            </div>
          </div>                             
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Password Baru</label>
                <input type="password"  name="password" value="<?php echo @$password ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-sm-10">
              <label>Konfirmasi password</label>
              <input type="password"  name="confirm_pwd" value="<?php echo @$confirm_pwd ?>" class="form-control">
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
