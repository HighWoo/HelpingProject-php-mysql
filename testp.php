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
  <center><br><br><br><h1><?php echo $_SESSION['id']; ?> 님이 지원하신 봉사활동</h1>
  <h4>원하는 봉사활동의 제목을 클릭하여 상세정보를 확인하세요</h4></center>
    <table class="list-table">
      <thead>
          <tr>
              <th width="90">봉사번호</th>
              <th width="300">제목</th>
			  <th width="120">시작일자</th>
              <th width="120">봉사내용</th>
			  <th width="70">봉사시간</th>
			  <th width="90">생성자</th>
			  <th width="90">선택여부</th>
            </tr>
        </thead>
        <?php
		$sid=$_SESSION['id'];
		  $sql = "select volapp.volnum,volapp.cho,volcontents.title,volcontents.volstart,volcontents.volclass,volcontents.voltime,volcontents.id
		  from volcontents,volapp where volapp.id='$sid' and volcontents.volnum=volapp.volnum order by volnum asc"; 
		  $result = mysqli_query($connect, $sql);
			
        $sqlc = "select volnum from volapp "; 
		$resultc = mysqli_query($connect, $sqlc);
		$countc = mysqli_num_fields($resultc);
		
		$sqld = "select cho from volapp "; 
		$resultd = mysqli_query($connect, $sqld);
		$countd = mysqli_num_fields($resultd);
		
		$volappcho= array();
		while($rowsc=mysqli_fetch_row($resultc)){
			$rowsd=mysqli_fetch_row($resultd);
			for ($a =0; $a < $countc; $a++)
			{	
				
			}
			
	    }
		
	    
            while($board = mysqli_fetch_array($result))
            {
				
        ?>	

		
		
      <tbody>
        <tr>
		  
          <td width="70" name="num"><?php echo $board['volnum']; ?></td>
		  <td width="500"><a href="myappvol_info.php?volnum=<?php echo $board["volnum"];?>"><?php echo $board['title'];?></a></td>
          <td width="120" name="address"><?php echo $board['volstart']; ?></td>
	      <td width="120" name="address"><?php echo $board['volclass']; ?></td>
		  <td width="120" name="address"><?php echo $board['voltime']; ?></td>
		  <td width="60" name="address"><?php echo $board['id']; ?></td>
		  <?php
			 if ($board['cho']==1){?>
			 <td width="60" name="address">
			 <?php echo "선택됨"; ?></td><?php } 
			 else { ?>
			 <td width="60" name="address">
			 <?php echo "대기"; ?></td><?php }?>
			 
			 
		  
        </tr>
      </tbody>
      <?php 
			
		  }?>
    </table>

  </div>

       
    </body>
</html>
