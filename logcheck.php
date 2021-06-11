<?php


session_start(); // 세션
include ("connect_db.php"); // DB접속



$id = $_POST['userid']; // 아이디
$pw = $_POST['userpw']; // 패스워드
  
$query = "select * from user where id='$id' and pw='$pw'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);


if($id==null||$pw==null){
	echo "<script>window.alert('빈칸이 있습니다');</script>"; 
	 echo "<script>location.href='Login.php';</script>";
}
else{
	
 if($id==$row['id'] && $pw==$row['pw']){ 
 
   $_SESSION['name']=$row['name'];
   $_SESSION['id']=$row['id'];
   $_SESSION['voru']=$row['voru'];
 
   echo "<script>location.href='alogmain.php';</script>";

}else{

   echo "<script>window.alert('입력한 정보가 바르지 않습니다');</script>"; 
   echo "<script>location.href='Login.php';</script>";

}
}



?>