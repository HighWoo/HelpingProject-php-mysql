<?php
$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect,'Login');
mysqli_query($connect,"set session character_set_connection=utf8;");
mysqli_query($connect,"set session character_set_result=utf8;");
mysqli_query($connect,"set session character_set_client=utf8;");
?>