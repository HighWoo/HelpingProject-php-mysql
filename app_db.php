<?php
session_start(); 
$volnum=$_POST['volnum'];
$id=$_SESSION['id'];
include ("connect_db.php"); 
$sql="insert into volapp(volnum,id)";
$sql.="values('$volnum','$id')";

mysqli_query($connect,$sql);
mysqli_close($connect);

print "<script language=javascript> alert('지원이 완료되었습니다'); location.replace('allvol.php'); </script>";


?>