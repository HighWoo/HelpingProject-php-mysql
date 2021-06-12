<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
  <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
 
<body>
<div id="home" class="big-bg">
 <?php include "header.php" ?>
   
   <?php
   include "connect_db.php";
   
   $id=$_SESSION['id'];
   $title= $_POST['title'];
   $content= $_POST['content'];
   date_default_timezone_set('Asia/Seoul');
   $date= date('Y-m-d H:i:s');
   
   if($title==null||$content==null){
	print "<script language=javascript> alert('빈칸이있습니다'); location.replace('question_write.php'); </script>";
}
   
   $URL = './Service.php';  
   
   $query = "insert into question (number,title, content, id, date) values(null,'$title', '$content','$id', '$date')";
   $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
                    
  
  </body>
  </html>