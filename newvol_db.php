<?php
session_start(); 
$title =$_POST['title'];
$volstart=$_POST['volstart'];
$volclass=$_POST['volclass'];
$volcontent=$_POST['volcontent'];
$voltime=$_POST['voltime'];
$volnum=1;
$id=$_SESSION['id'];
if($title==null||$volstart==null||$volclass==null||$voltime==null){
	print "<script language=javascript> alert('빈칸이있습니다'); location.replace('newvol.php'); </script>";
}

else{

include ("connect_db.php");

$sql="insert into volcontents(title,volstart,volclass,volcontent,voltime,volnum,id)";
$sql.="values('$title','$volstart','$volclass','$volcontent','$voltime','$volnum','$id')";

mysqli_query($connect,$sql);
mysqli_close($connect);

print "<script language=javascript> alert('봉사 공고 등록이 완료되었습니다'); location.replace('newvol.php'); </script>";
}

?>