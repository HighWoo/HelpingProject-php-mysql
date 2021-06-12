<?php
session_start(); 
    $id="";

    if( isset($_SESSION['id'])) $id= $_SESSION['id'];

if(!$id){
	echo "<script>location.href='Login.php';</script>"; 
}
else if($_SESSION['voru']=="봉사자"){
	echo "<script>location.href='allvol.php';</script>";
}
else if($_SESSION['voru']=="사용자"){
	echo "<script>location.href='newvol.php';</script>";
}

?>