<?php

include ("connect_db.php"); 

?>
<!DOCTYPE html>

<html>
    <head>
	  <meta charset="UTF-8">
	  <meta name="Generator" content="EditPlus®">
	  <meta name="Author" content="">
	  <meta name="Keywords" content="">
	  <meta name="Description" content="">
	  <title>Helping</title>

	 <meta name="description" content="ㅁㅁㅁ">
	 <link rel="stylesheet" href="files/sub.css">
	 <link rel="stylesheet" href="files/matching.css">
	 <link rel="icon" type="image/png" href="files/smalllogo.png">
    </head>
	 <center>
<body>
<div id="home" class="big-bg">
 <?php include "header.php" ?>
 
        <div id="board_area"> 
  <br><br><br><h1>모집중인 팀</h1>
  <h4>원하는 팀의 제목을 클릭하여 지원을 시작하세요</h4>
    <table class="list-table">
      <thead>
          <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">날짜</th>
                <th width="100">봉사시간</th>
				<th width="70">구인자</th>
            </tr>
        </thead>
        <?php
		  $sql = "select * from volcontents order by volnum asc"; 
		  $result = mysqli_query($connect, $sql);
		
            while($board = mysqli_fetch_array($result))
            {
    
        ?>
      <tbody>
        <tr>
		  
          <td width="70" name="num"><?php echo $board['volnum']; ?></td>
		  <td width="500"><a href="appvol.php?volnum=<?php echo $board["volnum"];?>"><?php echo $board['title'];?></a></td>
          <td width="120"><?php echo $board['volstart']?></td>
          <td width="100"><?php echo $board['voltime']; ?></td>
		  <td width="100"><?php echo $board['id']; ?></td>

        </tr>
      </tbody>
      <?php } ?>
    </table>

  </div>
       
    </body>
</html>
