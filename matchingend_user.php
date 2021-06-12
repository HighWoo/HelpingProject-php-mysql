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
 
 <div id="board_area"> 
   <?php
		  $nums=$_GET['volnum'];
          $sql = "select * from volcontents where volnum=".$nums.""; 
		  $result = mysqli_query($connect, $sql);
		  $board = mysqli_fetch_array($result);
		  
		 
        ?>
  <br><br><br><center><h1>매칭이 완료되었습니다</h1>
  <h4>봉사자의 연락을 기다려주세요</h4></center>
    <table class="list-table">
      <thead>
          <tr>
                <th width="100">봉사번호</th>
                <th width="700">제목</th>
                <th width="100">봉사종류</th>
				<th width="100">봉사시작시간</th>
				<th width="60">생성자</th>
            </tr>
			
        </thead>
		<tbody>
        <tr>
          <td> <Input type="hidden" name="num" value="<?php echo $board['volnum']; ?>" style="width=70;"><?php echo $board['volnum']; ?></td>
          <td width="500"><?php echo $board['title']?></a></td>
		  <td width="100"><?php echo $board['volclass']; ?></td>
		  <td width="100"><?php echo $board['volstart']; ?></td>
		  <td width="60"><?php echo $board['id']; ?></td>

        </tr>
      </tbody>
		 
    </table>
	 <br><br><br><center><h1>매칭자 정보</h1></center>
	<table class="list-table">
	
     <thead>
	    
		<tr>
			    <th width="200">아이디</th>
				<th width="200">이름</th>
				<th width="200">전화번호</th>
				
			</tr>
			 </thead>
			  </form>
			 <form name=accept_form method=post action="choval.php">
      <?php 
	      $usql="select user.id,user.name,user.phone from user,volapp where volapp.volnum='$nums' and user.id=volapp.id and volapp.cho=1";
		  $uresult = mysqli_query($connect, $usql);
		   while($uboard = mysqli_fetch_array($uresult))
            {
				?>
      <tbody>
        <tr>
          
           <td width="200"><?php echo $uboard['id']?></td>
		   <td width="200"><?php echo $uboard['name']?></td>
		   <td width="200"><?php echo $uboard['phone']?></td>
          

        </tr>
		
      </tbody>
	  <?php } ?>
	 
       </table>
      <Input type="hidden" name="cnum" value="<?php echo $board['volnum']; ?>" style="width=70;">

        </form>

		
  </div>

       
    </body>
</html>
