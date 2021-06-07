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
    $number = $_GET['number'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y-m-d H:i:s');
    $query = "update question set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./question_view.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
   
   </body>
   </html>