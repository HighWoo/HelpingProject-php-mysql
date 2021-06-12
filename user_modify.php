<?php
    session_start();
    $userpw=$_POST['userpw'];
    $userpwr=$_POST['userpwr'];
    $useraddr=$_POST['useraddr'];
    $phonenum=$_POST['phonenum'];
    include ("connect_db.php");
    if(empty($userpw)||empty($userpwr)||empty($useraddr)||empty($phonenum)){
         echo "<script>window.alert('빈칸이 있습니다.');</script>"; 
         echo "<script>location.href='Informch.php';</script>";
      }
    else if($userpw!=$userpwr){
       echo "<script>window.alert('비밀번호확인이 다릅니다.');</script>"; 
       echo "<script>location.href='Informch.php';</script>";
      }
    else {
      $query = "UPDATE user SET pw='$userpw', adr='$useraddr', phone='$phonenum' WHERE id='$_SESSION[id]'";
      $result = mysqli_query($connect, $query);
      echo "<script>window.alert('정보 수정을 완료했습니다.');</script>"; 
      echo "<script>location.href='alogmain.php';</script>";
     }
?>
