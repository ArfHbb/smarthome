<?php
session_start();
include 'konek.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo "Username dan password tidak cocok";
}else{
	$_SESSION['id'] = $row['id'];
	$_SESSION['nama'] = $row['nama'];
	$_SESSION['status'] = $row['status'];
	$_SESSION['pwd'] = $row['pwd'];
	$_SESSION['uid'] = $row['uid'];
}

header("Location: profile.php");
