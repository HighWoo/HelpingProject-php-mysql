<?php

session_start(); // 세션
include ("connect_db.php"); // DB접속



$id = $_POST['userid']; // 아이디
$pw = $_POST['userpw']; // 패스워드
  
$query = "select * from user where id='$id' and pw='$pw'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);



if($id==$row['id'] && $pw==$row['pw']){ 

   $_SESSION['id']=$row['id'];
   $_SESSION['voru']=$row['voru'];
   echo "<script>location.href='alogmain.html';</script>";

}else{

   echo "<script>window.alert('invalid username or password');</script>"; 
   echo "<script>location.href='Login.php';</script>";

}

?>