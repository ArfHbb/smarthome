<?php 

	session_start();
include 'konek.php';

	
// http://php.net/manual/en/function.exec.php
// if we have POST value named "clicked"
if(isset($_POST['clicked'])){
	
	
	$relayId = $_POST['relayId'];
	if($_POST['clicked']  == 'true' ){
		// executing the command : sudo python relay_on.py id
		// where the id is the number of relay that we want to switch on/off
		$act = "Turn on lampu ".$relayId;
		exec("sudo python /var/www/html/relay_on.py " . $_POST['relayId']);
		echo "true";
	}else{
		$act = "Turn off lampu ".$relayId;
		exec("sudo python /var/www/html/relay_off.py " . $_POST['relayId']);
		echo "false";
	}
	$uid = $_SESSION['uid'];
	$nama = $_SESSION['nama'];
	$time = date('Y-m-d H:i:s');
	$query="INSERT INTO `log` (`uid`, `name`, `aktivitas`, `log_time`) VALUES ( '$uid', '$nama', '$act', '$time')";
	$conn->query($query);

}
