<?php
session_start(); 
$volnum=$_POST['cnum'];
$id=$_POST['choice']; 
include ("connect_db.php"); 
$sql="update volapp set cho=1 where id='$id' and volnum='$volnum'  ";

mysqli_query($connect,$sql);
mysqli_close($connect);



if($id==null){
	echo "<script>window.alert('수락할 봉사자를 선택하셔야 합니다'); history.back(-1)</script>";
}
else{
echo "<script>alert(\"완료되었습니다\");</script>";
echo "<script>location.href='matchingend_user.php?volnum=$volnum';</script>";
}
?>