<?php 
include 'konek.php';
$id = $_GET['id'];
$delete="DELETE FROM users WHERE id='$id'";
$con=mysqli_connect('localhost','root','','raspberry');
mysqli_query($con,$delete);

header("location:user.php?pesan=hapus");
?>