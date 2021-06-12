<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/main.css">
 <link rel="stylesheet" href="files/reply.css">
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
   
    $number = $_GET['number'];
    $query = "select title, content, id, date from question where number =$number";
    $result = $connect->query($query);
    $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=10 align= center bgcolor=white><font color=black>제목 : <?php echo $rows['title']?></font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>내용</td>
                        <td><?php echo $rows['content']?></td>
                        </tr>
                </table>
                
                <div class="container">
			<div class="reply_view">
				<h3 style="padding:10px 0 15px 0; border-bottom: solid 1px gray;">댓글목록</h3>
				<?php 
					$query="select * from comment where board_number=$number order by number desc";
					$result= $connect->query($query);						  
					while($reply= mysqli_fetch_assoc($result)){					  
				?>
				<div class="dat_view">
					<div><b><?=$reply['id']?></b></div>
					<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
					<div class="rep_me dap_to"><?=$reply['date']?></div>
					<div class="rep_me rep_menu">
						<a class="dat_del_btn" href="reply_delete.php?id=<?php echo $reply['id']?>&content=<?php echo $reply['content']?>">삭제</a>
					</div>
				</div>
			
				<?php } ?>
				<form method=post action="reply_ok.php">
				<div class="dat_ins">
					<input type="hidden" name="bno" value=<?=$number?>>
					<input type="hidden" name="dat_user" value=<?=$_SESSION['id']?>>
					<input type="hidden" name="question_user" value=<?=$rows['id']?>>
					<div style="margin-top:10px;">
						<textarea name="content" ></textarea>
						<input type=submit class="rep_btn" value="댓글">

					</div>
				</div>
				</form>
			</div>
		</div>
                
                        <center>
                        <div class="view_btn">                          
                          <button onclick="location.href='./Service.php'">목록으로</button>
                          <button onclick="location.href='./question_modify.php?number=<?=$number?>&id=<?=$_SESSION['id']?>'">수정</button>
 
                          <button onclick="location.href='./question_delete.php?number=<?=$number?>&id=<?=$_SESSION['id']?>'">삭제</button>
                        </div>
                        </center>
                </td>
                </tr>
        </table>
 
 
        
        
   
   
  </body>
  </html>