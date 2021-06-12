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
<?php
include "connect_db.php";
$board_number=$_POST['bno'];
$id=$_POST['dat_user'];
$content=$_POST['content'];
date_default_timezone_set('Asia/Seoul');
$date = date('Y-m-d H:i:s');
$question_user=$_POST['question_user'];
if($content==null){
	print "<script language=javascript> alert('빈칸이있습니다'); location.replace('question_view.php?number=$board_number'); </script>";
}
  else if ($id==$question_user||$id=='super') {
    
    
$query = "insert into comment (number,board_number, id, content, date) values(null,'$board_number', '$id', '$content','$date')";
$result = $connect->query($query);
                if($result){
                	print "<script language=javascript> alert('글이 등록되었습니다.'); location.replace('question_view.php?number=$board_number'); </script>";
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
                
      }
      else {
  	print "<script language=javascript> alert('관리자와 질문유저만 댓글을 남길 수 있습니다.'); location.replace('question_view.php?number=$board_number'); </script>";
  }
      
?>

  </body>
  </html>

