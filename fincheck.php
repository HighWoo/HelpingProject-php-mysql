<?php
 include ("connect_db.php"); 
 $nums=$_POST['volnuma'];
 echo $nums;
 $sql = "update volcontents set checka=1 where volnum='$nums'";  
 $result = mysqli_query($connect, $sql);
 $sql2 = "delete from volapp where volnum='$nums' and cho=0";  
 mysqli_query($connect, $sql2);
?>