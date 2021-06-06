<?php
session_start(); 
if($_SESSION['voru']=="봉사자"){
	echo "<script>location.href='allvol.php';</script>";
}
else if($_SESSION['voru']=="사용자"){
	echo "<script>location.href='newvol.php';</script>";
}
else{
	echo "<script>window.alert('ERROR');</script>"; 
}
?>