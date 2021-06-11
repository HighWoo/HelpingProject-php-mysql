<?php
 include ("connect_db.php"); 
 $nums=$_POST['volnuma'];
 $sql = "update volcontents set checka=1 where volnum='$nums'";  
 $result = mysqli_query($connect, $sql);
 $sql2 = "delete from volapp where volnum='$nums' and cho=0";  
 mysqli_query($connect, $sql2);
 echo "<script>alert(\"확인되었습니다\");</script>";
 echo "<script>location.href='matchingend_vol.php?volnum=$nums';</script>";
?>