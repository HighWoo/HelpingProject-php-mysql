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
<form name=appvol method=post action="app_db.php">
<div id="home" class="big-bg">
 <?php include "header.php" ?>
          <br>

 <div id="board_area"> 
  <center><br><br><br><h1><?php echo $_SESSION['name']; ?> 님이 생성하신 봉사활동 입니다</h1>
  <h4>원하는 봉사활동의 제목을 클릭하여 지원자 정보를 확인하세요</h4></center>
    <table class="list-table">
      <thead>
          <tr>
                <th width="70">번호</th>
                <th width="500">제목</th>
				<th width="120">시작일자</th>
                <th width="120">봉사시간</th>
				<th width="60">생성자</th>
				<th width="60">상태</th>
            </tr>
        </thead>
        <?php
		$sid=$_SESSION['id'];
		  $sql = "select volnum,title,volstart,voltime,id from volcontents where id='$sid' order by volnum asc"; 
		  $result = mysqli_query($connect, $sql);
		  
		
            while($board = mysqli_fetch_array($result))
            {
    
        ?>
      <tbody>
        <tr>
		  
          <td width="70" name="num"><?php echo $board['volnum']; ?></td>
		  <?php  
		          $volnuma=$board['volnum'];
		          $sql2= "select cho from volapp where volnum=$volnuma and cho=1";
		          $result2 = mysqli_query($connect, $sql2);
		          $count = mysqli_num_rows($result2);
           ?>
		  <td width="500"><a <?php if($count==0){echo "href=\"volunteers.php?volnum=";echo $board["volnum"]; echo"\"";}else{echo "href=\"matchingend_user.php?volnum=";echo $board["volnum"]; echo"\"";}?>><?php echo $board['title'];?></a></td>
		  
				
		
          <td width="120" name="address"><?php echo $board['volstart']; ?></td>
	      <td width="120" name="address"><?php echo $board['voltime']; ?></td>
		  <td width="60" name="address"><?php echo $board['id']; ?></td>
		  <td width="60" name="address"><?php if($count==0){echo "대기중";} else{echo "완료";} ?></td>
        </tr>
      </tbody>
      <?php 
    
		  }?>
    </table>

  </div>

       
    </body>
</html>
