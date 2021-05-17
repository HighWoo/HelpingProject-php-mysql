<?php

session_start();

if($_SESSION['id']!=null){
   session_destroy();
   echo "<script>alert(\"로그아웃되었습니다\");</script>";
}

echo "<script>location.href='Login.php';</script>";

?>