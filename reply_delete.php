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
session_start(); 
$id=$_GET['id'];
$content = $_GET['content'];
$query = "select id from comment where content='$content' AND id='$_SESSION[id]'";
$result = $connect->query($query);

$comment = mysqli_fetch_assoc($result);
$usrid = $comment['id'];

$URL = "./Service.php";

                if(!isset($_SESSION['id'])) {
        ?>              <script>
                                alert("권한이 없습니다.1");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['id']==$usrid) {
                $query = "delete from comment where content='$content'";
                $result = $connect->query($query);
                if($result) {
?>
        <script>
            alert("삭제되었습니다.");
            location.replace("./Service.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
        
        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.2");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }


                mysqli_close($connect);
?>

  </body>
  </html>

