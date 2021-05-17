<?php
session_start();
   echo "사용자 정보는<br>";
   echo "아이디:";
   echo $_SESSION['id'];
   echo "<br>정보:";
   echo $_SESSION['voru'];
?>