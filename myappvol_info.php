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
		  $board = mysqli_fetch_array($result)
        ?>
  <br><br><br><h1>조회결과</h1>
  <h4>지원하신 봉사활동의 상세정보 입니다</h4>
    <table class="list-table">
      <thead>
          <tr>
                <th width="100">번호</th>
                <th width="700">제목</th>
               
			    <th width="100">시작시간</th>
				<th width="100">아이디</th>
            </tr>
			
        </thead>
		<tbody>
        <tr>
          <td> <Input type="hidden" name="volnum" value="<?php echo $board['volnum']; ?>" style="width=70;"><?php echo $board['volnum']; ?></td>
          <td width="500"><?php echo $board['title']?></a></td>
		  <td width="100"><?php echo $board['volstart']; ?></td>
		  <td width="100"><?php echo $board['id']; ?></td>

        </tr>
      </tbody>
		 
    </table>
	<table class="list-table">
     <thead>
		<tr>
			    <th width="1000">주소</th>
				
			</tr>
			 </thead>
     
      <tbody>
        <tr>
          
           <td width="1000"><?php echo $board['voladd']?></td>
		  
          

        </tr>
      </tbody>
       </table>
	<table class="list-table">
     <thead>
		<tr>
			    <th width="1000">내용</th>
				
			</tr>
			 </thead>
     
      <tbody>
        <tr>
          
          <td width="1000"><?php echo $board['volcontent']?></a></td>
		  
          

        </tr>
      </tbody>
       </table>
	   <table class="list-table">
	   <thead>
		<tr>
			    
				<th width="1000">추가사항</th>
			</tr>
			 </thead>
			 <tbody>
        <tr>
          
          
		  <td width="1000"><?php echo $board['addcontent']?></a></td>
          

        </tr>
      </tbody>
	    </table>
	
		 </form>
  </div>
       
    </body>
</html>
