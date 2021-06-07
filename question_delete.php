<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
</head>

<body>
<?php
session_start(); 
include "connect_db.php";
$id=$_GET['id'];
$number = $_GET['number'];
$query = "select title, content, id, date from question where number=$number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);
$usrid = $rows['id'];

$URL = "./Service.php";
 
                if(!isset($_SESSION['id'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['id']==$usrid) {
                $query = "delete from question where number=$number";
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
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>


</body>
</html>