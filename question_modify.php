<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
  <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
 
 <style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                width: 50px;
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
                 
                
        }
 
</style>
 
 <body>
<div id="home" class="big-bg">
 <?php include "header.php" ?>
   
   <?php
   
   include "connect_db.php";
   $id=$_GET['id'];
   $number = $_GET['number'];
   $query = "select title, content, id, date from question where number=$number";
   $result = $connect->query($query);
   $rows = mysqli_fetch_assoc($result);
 
   $title = $rows['title'];
   $content = $rows['content'];
   $usrid = $rows['id'];
 

 
 
   $URL = "./Service.php";
 
                if(!isset($_SESSION['id'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['id']==$usrid) {
        ?>
        <form method = "get" action = "question_modify_action.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['id']?>"><?=$_SESSION['id']?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value="<?=$title?>"></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=85 rows=15><?=$content?></textarea></td>
                        </tr>
 
                        </table>
 
                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
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