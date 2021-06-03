<?php


session_start(); // 세션
include ("connect_db.php"); // DB접속



$id = $_SESSION['id']; // 아이디
$pw = $_POST['userpw']; // 패스워드
$query = "select * from user where id='$id' and pw='$pw'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);


if($pw==null){
	echo "<script>window.alert('비밀번호를 입력하세요');</script>";
	 echo "<script>location.href='informodlogin.php';</script>";
}
else{
	
 if($pw==$row['pw']){ 
   echo "<script>location.href='Informch.php';</script>";

}else{

   echo "<script>window.alert('입력한 정보가 바르지 않습니다');</script>"; 
   echo "<script>location.href='informodlogin.php';</script>";

}
}



?>